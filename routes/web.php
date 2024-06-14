<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CarController::class, 'index']);
Route::get('/detail/{car}', [CarController::class, 'detail']);

Route::post('/add_car', [CarController::class, 'store'])->name('add_car');
Route::post('/add_component', [PartController::class, 'store'])->name('add_component');

Route::delete('/destroy/{car}', [CarController::class, 'destroy'])->name('destroy_car');
Route::delete('/part/{part}', [PartController::class, 'destroy'])->name('part_delete');

Route::put('/update/{car}', [CarController::class, 'update'])->name('update_car');


