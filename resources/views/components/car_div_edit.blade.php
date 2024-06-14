@php
    /**
      * @var \App\Models\Car $car
      * @var \App\Models\Part $parts
     */
@endphp

<div class="col-lg-4 col-md-4 col-sm-12 mb-3 mt-3">
    <img class="car_image img-fluid" src="{{ asset('storage/' . $car->image_path) }}" alt="car_image">
</div>

<div class="col-lg-3 col-md-3 col-sm-12 mt-5">
    <p>Názov automobilu</p>
    <p>Je registrované</p>
    <p>Číslo registrácie </p>
</div>

<div class="col-lg-3 col-md-3 col-sm-12 mt-5">
    <input type="hidden" name="car_id" value="{{$car->id}}">
    <p><b><input name="name" type="text" value="{{$car->name}}"></b></p>
    <input type="hidden" name="is_registered" value="0">
    <input id="is_registered" class="w-10" name="is_registered" type="checkbox" value="1" {{ $car->is_registered ? 'checked' : '' }}>
    <p><b><input type="text" name="registration_number" value="{{$car->registration_number}}"></b></p>
</div>

<div class="col-lg-2 col-md-2 col-sm-12 mt-5">
    <button type="submit" class="btn btn-primary btn-sm mt-1">Submit</button>
</div>
