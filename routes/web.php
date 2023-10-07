<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\FavoritosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/', [WeatherController::class, 'index'])->name('buscar');


Route::get('/ciudad', function () {
    return view('Ciudad.ciudad');
})->name('ciudad');

Route::post('/fav', [FavoritosController::class, 'store'])->name('favoritos');

Route::delete('/fav{id}', [FavoritosController::class, 'destroy'])->name('favoritos-destroy');

Route::get('/fav', [FavoritosController::class , 'index'])->name('favoritos');

Route::get('/errores', function () {
    return view('errores');
})->name('errores');





