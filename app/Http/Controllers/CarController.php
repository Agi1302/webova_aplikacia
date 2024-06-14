<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Part;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::paginate(7);
        return view("welcome", compact('cars'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'registration_number' => 'required_if:is_registered,1|nullable|integer',
            'is_registered' => 'required|boolean',
            'image_path' => 'nullable|image|'
        ]);

        if (!$validated['is_registered'] && $validated['registration_number'] != null && $validated['registration_number'] != "") {
            return redirect('/')->withErrors(['error' => "Auto musi byt registrovane" ]);
        }

        $car = new Car();
        $car->name = $validated['name'];
        $car->registration_number = $validated['registration_number'];
        $car->is_registered = $validated['is_registered'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $car->image_path = $path;
        }

        $car->save();
        return redirect('/');
    }

    public function detail(Car $car)
    {
        $parts = Part::where('car_id', $car->id)->get();
        return view('detail', compact('car', 'parts' ));
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect("/");
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'registration_number' => 'required_if:is_registered,1|nullable|string',
            'is_registered' => 'required|boolean',
            'ids_parts.*' => 'nullable|integer|exists:parts,id',
            'names_parts.*' => 'nullable|string',
            'ser_numbers_parts.*' => 'nullable|integer'
        ]);

        if (!$validated['is_registered'] && !empty($validated['registration_number'])) {
            return redirect('/')->withErrors(['error' => "Auto musí byť registrované."]);
        }

        $car->name = $validated['name'];
        $car->registration_number = $validated['registration_number'];
        $car->is_registered = $validated['is_registered'];
        $car->save();

        if (isset($validated['ids_parts'])) {
            foreach ($validated['ids_parts'] as $id_part) {
                $part = Part::findOrFail($id_part);
                $part->name = $validated['names_parts'][$id_part] ?? $part->name;
                $part->serialnumber = $validated['ser_numbers_parts'][$id_part] ?? $part->serialnumber;
                $part->save();
            }
        }

        return redirect("/detail/$car->id");
    }
}
