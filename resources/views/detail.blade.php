@php
    /**
      * @var Illuminate\Database\Eloquent\Collection<\App\Models\Car> $cars
      * @var \App\Models\Part $parts
     */
@endphp

@extends('layouts.app')
@section('content')

<div class="main_title_div text-center">
    <a class="back" href="/">ZOZNAM AUTOMOBILOV</a>
    <h1 class="main_title">INFORMÁCIE O AUTOMOBILE S ID-{{$car->id}}</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="container div_row">
                <div id="left_edit" style="display: none">
                    <form method="POST" action="{{ route('update_car', $car->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mt-4">
                            @include('components.car_div_edit')
                        </div>

                        <div class="row">
                            <h6 class="text-center mt-4">INFORMÁCIE O DIELOCH K AUTOMOBILU S ID-{{$car->id}}</h6>
                        </div>

                        @include('components.table_edit')
                    </form>
                </div>

                <div id="left_non_edit">
                    <div class="row mt-4">
                        @include('components.car_div')
                    </div>

                    <div class="row">
                        <h6 class="text-center mt-4">INFORMÁCIE O DIELOCH K AUTOMOBILU S ID-{{$car->id}}</h6>
                    </div>

                    @include('components.table')
                </div>

            </div>
        </div>

        @include('components.add_form')
    </div>
</div>

@endsection
