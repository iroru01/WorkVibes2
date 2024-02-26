<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Usuario; 
=======
use App\Models\Usuario;
>>>>>>> 8e6934ba5bcc17968f262491a4291946d2b0436c

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
<<<<<<< HEAD
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
=======
        
        // Opcional: redirigir a alguna página o devolver una respuesta
        return redirect()->route('registro');
>>>>>>> 8e6934ba5bcc17968f262491a4291946d2b0436c
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
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

=======
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
            'id_departamento' => 'nullable|integer',
            'id_evento' => 'nullable|integer',
            'estado' => 'required|string|max:255',
        ]);
    
        // Crear un nuevo usuario con los datos proporcionados
        $user = User::create([
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
        ]);
    
        // Opcional: redirigir a alguna página o devolver una respuesta
        return redirect()->route('lista_emociones');
    }


    public function formularioCrear()
    {
        return view('registro');
    }

    public function guardar(Request $request)
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
            'id_departamento' => 'nullable|integer',
            'id_evento' => 'nullable|integer',
            'estado' => 'required|string|max:255',
        ]);

        // Guardar el usuario en la base de datos
        Usuario::create([
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
            'estado' => $request->estado
        ]);

        // Redirigir a alguna página de éxito o mostrar un mensaje de éxito
        return redirect()->route('lista.emociones')->with('success', 'Usuario creado correctamente');
    }

    public function listaEmociones()
    {
        return view('lista_emociones');
    }
>>>>>>> 8e6934ba5bcc17968f262491a4291946d2b0436c

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
        $evento = Evento::find($id);
        return View('insertar_emocion', [
            'evento' => $evento
        ]);
    }


    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, string $id)
    {
        $evento = Evento::find($id);
        $evento->nombre_evento = $request->nombre_evento;
        $evento->fecha = $request->fecha;
        $evento->emocion = $request->emocion;
        $evento->save();


        return Redirect::to('evento')->with('notice', 'El evento ha sido modificado correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */


    public function destroy(string $id)
    {
    $evento = Evento::findOrFail($id);
    $evento->delete();


    return redirect()->route('lista_emociones')->with('notice', 'El evento ha sido eliminado correctamente.')->with('noticeType', 'success');
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



