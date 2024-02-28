<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User; //Va a mantener la info de la persona que ha accedido
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function register(Request $request){

    }

    public function login(Request $request){

        $credentials = $request->only('nombre_user', 'contraseña');

        // Buscar al usuario por nombre de usuario
        $user = User::where('nombre_user', $credentials['nombre_user'])->first();
    
        if ($user) {
            // Si el usuario existe, verificar la contraseña
            if ($credentials['contraseña'] == $user->contraseña) {
                // Autenticación exitosa
                Auth::login($user);
                return redirect('/lista/emociones');
            }
        }
    
        // Autenticación fallida
        return redirect('login')->with('error', 'Nombre de usuario o contraseña incorrectos');
        
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken;

        return redirect(route('login'));
    }

}
