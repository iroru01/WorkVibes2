<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\UsuarioController;

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


//VISTAS 
Route::view("index","index");
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/registro', 'RegistrarController@index')->name('save');
Route::get('/lista_emociones', 'UsuarioController@index')->name('show');

//Route::resource('emocionesBueno',emocionesBueno::class); //creo que esta ruta está mal


Route::get('/registrar', [UsuarioController::class, 'create'])->name('guardar_usuario');

/***AUTENTIFICACION*****/ 
//vistas para la autentificación de Laravel, enganchar las que tenemos de html
Route::view('/login',"login") -> name('login');
Route::view('/registro',"save") -> name('save');
Route::view('/privada', "secret") -> middleware('auth') -> name('privada');//donde queremos llegar una vez tenemos inciada sesión de forma correcta
//con el middleware lo que hacemos es buscar una sesion activa del usuario que entrase previamente y comprobamos que las credenciales sean correctas y sigan igual entonces podemos dejarle enetrar
//controladores con el que sabremos qué quiere hacer el usuario
Route::post('/validar-registro',[LoginController::class, 'register']) -> name('validar-registro');
Route::post('/inicia-sesión',[LoginController::class,'login']) -> name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout']) -> name('logout');
