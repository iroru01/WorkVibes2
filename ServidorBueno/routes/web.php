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
Route::post('/usuarios', [PrincipalController::class, 'store'])->name('usuarios.store');

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



Route::get('/lista', function () {
    return view('lista_emociones');
});

Route::get('/emociones', function () {
    return view('insertar_emocion');
});

Route::get('/fin', function () {
    return view('fin');
});