<?php

namespace App\Http\Controllers;
use App\Models\usuarios;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    //
    // Método para obtener todos los usuarios
    public function index()
    {
        $usuarios = usuarios::all();
        return response()->json(['usuarios' => $usuarios], 200);
    }

    // Método para mostrar un usuario específico
    public function show($id)
    {
        $usuario = usuarios::findOrFail($id);
        return response()->json(['usuario' => $usuario], 200);
    }

    // Método para crear un nuevo usuario
    public function register (Request $request){ //store
        //Validar los datos
        //Validar el usuario que tenemos abierto
        $user = new usuarios();
        $user -> nombre = $request -> nombre;
        $user -> apellidos = $request -> apellidos;
        $user -> dni = $request -> dni;
        $user -> telefono = $request -> telefono;
        $user -> direccion = $request -> direccion;
        $user -> contraseña = Hash::make($request -> contraseña); //creamos token de la contraseña para que llame a hash y la guarde cifrada
        
        $user -> save();

        //después de haber hecho el registro nos redirige a login, pero esto es opcional creo que nosotros no lo tenemos
        //Auth::login($user); //entendemos que está validado y todo correcto y lo redigiremos a su perfil
        return redirect(route('lista_emociones'));
    }

    //create

    public function create (){
        $user = new usuarios();
        return view('save');
    }

    // Método para actualizar un usuario existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_user' => 'required',
            'dni' => 'required',
            'contraseña' => 'required',
            'name' => 'required',
            'apellido' => 'required',
            'teléfono' => 'required',
            'dirección' => 'required',
            'password' => 'required',
        ]);

        $usuario = usuarios::findOrFail($id);
        $usuario->update($request->all());
        return response()->json(['usuario' => $usuario], 200);
    }

    // Método para eliminar un usuario
    public function destroy($id)
    {
        $usuario = usuarios::findOrFail($id);
        $usuario->delete();
        return response()->json(['mensaje' => 'usuarios eliminado correctamente'], 200);
    }
}
