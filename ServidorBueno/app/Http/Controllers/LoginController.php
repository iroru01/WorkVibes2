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
        

        $credential = [
            "nombre_user" => $request -> nombre_user,
            "contraseña" => $request -> contraseña,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/lista/emociones');
        }
        else{
            return redirect('login');
        }
        
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken;

        return redirect(route('login'));
    }

}
