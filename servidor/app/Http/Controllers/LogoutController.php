<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    
    public function logout(Request $request){
        Auth::logout(); //laravel cerrará sesión del usuario que haya abierto sesión por cualquiera de las vías

        $request -> session() -> invalidate(); //reseteamos la sesión para evitar que quede guardada y pueda dar algún problema, invalida la sesión
        $request -> session() -> regenerateToken(); 

        return redirect(route('login')); //una vez cerrada la sesión lo redirigiremos a login
    }
}
