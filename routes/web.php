<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeteriaController;
use App\Http\Controllers\CategoriaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('holaMundo');
});

//Rutas
// Route::get('/producto',)
Route:: resource('cafeteria', CafeteriaController::class);

Route:: resource('categoria', CategoriaController::class);

