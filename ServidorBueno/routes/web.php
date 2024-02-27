<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

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
/*crear usuario*/
Route::post('/usuarios/store', [PrincipalController::class, 'store'])->name('usuarios.store');
Route::get('/register', [PrincipalController::class, 'create'])->name('usuarios.create');
Route::get('/lista/emociones', [PrincipalController::class, 'listaEmociones'])->name('lista.emociones');
Route::get('/emociones', [PrincipalController::class, 'Emociones'])->name('emociones');

Route::get('/crear-usuario', [PrincipalController::class, 'formularioCrear'])->name('crear.usuario');
Route::post('/guardar-usuario', [PrincipalController::class, 'guardar'])->name('guardar.usuario');

/*index*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
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
