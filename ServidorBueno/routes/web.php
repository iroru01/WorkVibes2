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

/* Mostrar el formulario de registro */
Route::get('/registrar_user', [PrincipalController::class, 'create'])->name('registro.create');

/* Procesar el formulario de registro */
Route::post('/almacenar_user', [PrincipalController::class, 'store'])->name('registro.store');

Route::get('/index', [PrincipalController::class, 'index'])->name('index');

Route::get('/iniciar_sesion', [PrincipalController::class, 'login'])->name('login');

Route::get('/lista', [PrincipalController::class, 'lista_emociones'])->name('lista_emociones');


Route::post('/iniciar_sesion', [PrincipalController::class, 'login'])->name('login');
Route::get('/registro', [PrincipalController::class, 'registro'])->name('registro');

/*index*/
Route::get('/', function () {
    return view('index');
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