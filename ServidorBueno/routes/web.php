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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::resource('usuario',PrincipalController::class); //si da fallo puede ser esto 
=======
Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/lista', function () {
    return view('lista_emociones');
});

Route::get('/emociones', function () {
    return view('insertar_emocion');
});

Route::get('/fin', function () {
    return view('fin');
});
>>>>>>> 131912e4d98b151be7e5855c094edfb44bbc1278
