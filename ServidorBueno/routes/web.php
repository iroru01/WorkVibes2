<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
use App\Http\Controllers\LoginController;
>>>>>>> 6da1508d7cea541e7181fd0473189c415d28feac

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


//LOGIN
Route::view('/login',"login") -> name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/privada',"secret")->middleware('auth') -> name('privada'); //el middleware busca que el usuario que inicia sesión ya tenga una sesión abierta, sino que ya exista para poder abrir la sesion

Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->name('inicia-sesion');
ROute::get('/logout',[LoginController::class,'logout'])->name('logout');
