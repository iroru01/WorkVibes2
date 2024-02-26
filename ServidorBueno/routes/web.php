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
<<<<<<< HEAD

/* Mostrar el formulario de registro */
Route::get('/registrar_user', [PrincipalController::class, 'create'])->name('registro.create');

/* Procesar el formulario de registro */
Route::post('/almacenar_user', [PrincipalController::class, 'store'])->name('registro.store');

Route::get('/index', [PrincipalController::class, 'index'])->name('index');

Route::get('/iniciar_sesion', [PrincipalController::class, 'login'])->name('login');

Route::get('/lista', [PrincipalController::class, 'lista_emociones'])->name('lista_emociones');


Route::post('/iniciar_sesion', [PrincipalController::class, 'login'])->name('login');
Route::get('/registro', [PrincipalController::class, 'registro'])->name('registro');
=======
Route::post('/usuarios/store', [PrincipalController::class, 'store'])->name('usuarios.store');
Route::get('/register', [PrincipalController::class, 'create'])->name('usuarios.create');
Route::get('/lista/emociones', [PrincipalController::class, 'listaEmociones'])->name('lista.emociones');

Route::get('/crear-usuario', [PrincipalController::class, 'formularioCrear'])->name('crear.usuario');
Route::post('/guardar-usuario', [PrincipalController::class, 'guardar'])->name('guardar.usuario');
>>>>>>> 8e6934ba5bcc17968f262491a4291946d2b0436c

/*index*/
Route::get('/', function () {
    return view('index');
});

<<<<<<< HEAD
=======
Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});



>>>>>>> 8e6934ba5bcc17968f262491a4291946d2b0436c
Route::get('/lista', function () {
    return view('lista_emociones');
});

Route::get('/emociones', function () {
    return view('insertar_emocion');
});

Route::get('/fin', function () {
    return view('fin');
});
