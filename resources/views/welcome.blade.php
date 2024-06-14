@php
    /**
      * @var Illuminate\Database\Eloquent\Collection<\App\Models\Car> $cars
     */
@endphp

@extends('layouts.app')
@section('content')

<div class="main_title_div text-center">
    <h1 class="main_title">INVENTÁR AUTO-DIELOV</h1>
</div>
<div class="container main-container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="container">
                @foreach($cars as $index => $car)
                    <div class="row mt-4 div_row">
                        @include('components.car_div')
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-4">
                    {{$cars->links()}}
                </div>
            </div>
        </div>

        @include('components.add_form')
    </div>
</div>

@endsection
