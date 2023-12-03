<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('cars')->group(function (){
    Route::get('/', [\App\Http\Controllers\CarsController::class, 'index'])->name('index');
    Route::get('create', [\App\Http\Controllers\CarsController::class, 'create'])->name('create');
    Route::post('store', [\App\Http\Controllers\CarsController::class, 'store'])->name('store');
});
