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

// /cars
//Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
//Route::get('/cars', [\App\Http\Controllers\HomeController::class, 'create']);
// /news
//Route::get('/', [\App\Http\Controllers\NewsController::class, 'index']);
//Route::post('/news', [\App\Http\Controllers\NewsController::class, 'create']);
// /currency
Route::get('/', [\App\Http\Controllers\CurrencyController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\CurrencyController::class, 'create']);
Route::post('/store', [\App\Http\Controllers\CurrencyController::class, 'store']);
