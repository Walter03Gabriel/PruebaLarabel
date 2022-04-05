<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ruta de formulario
Route::get('/form', function () {
    return view('form');
})->name('form');

// ruta al enviar correo
Route::post('send', 'App\Http\Controllers\ControllerMail@send');

Route::get('/About', function () {
    return view('About');
})->name('About');