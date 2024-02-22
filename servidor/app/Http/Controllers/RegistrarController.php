<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegistrarController extends Controller
{
    //
    public function registrer (Request $request){


        //Validar los datos
        $request->validate([
            'nombre_user' => 'unique|string|max:255',
            'nombre' => 'nullable|string|max:255',
            'apellidos' => 'nullable|string|max:255',
            'dni' => 'unique|string|max:255',
            'telefono' => 'nullable|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);
    

        //Validar el usuario que tenemos abierto
        // Crear un nuevo usuario
        $usuario = new usuarios();
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->dni = $request->dni;
        $usuario->telefono = $request->telefono;
        $usuario->direccion = $request->direccion;
        $usuario->contraseña = Hash::make($request->contraseña); // Cifrar la contraseña

        // Guardar el usuario en la base de datos
        $usuario->save();
        
        // Opcional: iniciar sesión automáticamente después del registro
        // Auth::login($usuario);

        // Redirigir a donde desees después del registro
        return redirect()->route('lista_emociones');
    }
}
