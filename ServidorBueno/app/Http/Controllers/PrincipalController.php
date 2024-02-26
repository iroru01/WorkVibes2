<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Usuario; 

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //Hay que crear un metodo register que será un store que es donde guardaremos toda la info y de aqui nos redirigirá a una funcion que es create para crear los usuarios y guardar los usuarios en la base de datos
    
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
            // Crear un nuevo usuario con los datos proporcionados
        $usuario = new Usuario();
        $usuario->nombre_user = $request->nombre_usuario;
        $usuario->dni = $request->dni;
        $usuario->nombre = $request->nombre;

        'nombre_user' => $request->nombre_user,
        'dni' => $request->dni,
        'nombre' => $request->nombre,
        'apellidos' => $request->apellidos,
        'telefono' => $request->telefono,
        'direccion' => $request->direccion,
        'contraseña' => $request->contraseña,
        'puesto' => $request->puesto,
        'incorporacion' => $request->incorporacion,
        'id_departamento' => $request->id_departamento,
        'id_evento' => $request->id_evento,
        'estado' => $request->estado,


    // Después de crear el usuario, redirigir al usuario a la página de inicio
    return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'nombre_user' => 'required|string|max:255',
        'dni' => 'required|string|max:255',
        'nombre' => 'required|string|max:255',
        'apellidos' => 'required|string|max:255',
        'telefono' => 'required|string|max:255',
        'direccion' => 'required|string|max:255',
        'contraseña' => 'required|string|max:255',
        'puesto' => 'required|string|max:255',
        'incorporacion' => 'required|date',
        'id_departamento' => 'required|integer',
        'id_evento' => 'nullable|integer',
        'estado' => 'required|string|max:255',
    ]);

    return redirect('lista_emociones');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function Login()
    {

        return view('login');
    }

    public function lista_emociones()
    {
        return view('lista_emociones');
    }
    public function registro()
    {
        return view('registro');
    }


}
