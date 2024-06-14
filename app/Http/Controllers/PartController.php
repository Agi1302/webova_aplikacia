<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PartController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'serialnumber' => 'required|integer',
            'car_id' => "required|exists:cars,id|integer",
        ]);

        $part = new Part();
        $part->name = $validated['name'];
        $part->serialnumber = $validated['serialnumber'];
        $part->car_id = $validated['car_id'];
        $part->save();

        return back();
    }

    public function destroy(Part $part)
    {

        $part->delete();
        Log::info("Deleted part with ID: {$part}");
        return redirect("/detail/$part->car_id");

    }

}
