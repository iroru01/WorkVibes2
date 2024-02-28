<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Auth;

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

/* Rutas para el controlador PrincipalController */

/* Rutas para el registro y gestión de usuarios */
Route::get('/crear-usuario', [PrincipalController::class, 'formularioCrear'])->name('crear.usuario');
Route::post('/guardar-usuario', [PrincipalController::class, 'guardar'])->name('guardar.usuario');

/* Rutas para las emociones */
Route::post('/lista/emociones', [PrincipalController::class, 'listaEmociones'])->name('lista.emociones.post');
Route::get('/lista/emociones', [PrincipalController::class, 'listaEmociones'])->name('lista.emociones');

Route::get('/emociones', [PrincipalController::class, 'Emociones'])->name('emociones');
Route::post('/emociones/guardar', [PrincipalController::class, 'guardarEmocion'])->name('emociones.guardar');

/* Ruta para el inicio de sesión */

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [PrincipalController::class, 'login'])->name('login');

Route::post('/logout', function () {
    Auth::logout(); // Cierra la sesión del usuario
    return redirect()->route('login'); // Redirige al usuario al formulario de inicio de sesión
})->name('logout');


/*RUTA PARA AUTENTICAR */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* Rutas adicionales */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/fin', function () {
    return view('fin');
});
