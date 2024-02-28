<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Evento;
use App\Models\Emocion;
use Illuminate\Support\Facades\Redirect;
=======
use App\Models\User;

>>>>>>> 6da1508d7cea541e7181fd0473189c415d28feac

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Opcional: redirigir a alguna página o devolver una respuesta
        return redirect()->route('registro');
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
        'password' => 'required|string|max:255', // Cambiado de 'contraseña' a 'password'
        'puesto' => 'required|string|max:255',
        'incorporacion' => 'required|date',
        'id_departamento' => 'nullable|integer',
        'id_evento' => 'nullable|integer',
        'estado' => 'nullable|string|max:255',
    ]);

    // Create a new user without hashing the password
    $user = User::create([
        'nombre_user' => $request->nombre_user,
        'dni' => $request->dni,
        'nombre' => $request->nombre,
        'apellidos' => $request->apellidos,
        'telefono' => $request->telefono,
        'direccion' => $request->direccion,
        'password' => $request->password, // Use the plain text password
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
        'estado' => 'nullable|string|max:255',
    ]);

<<<<<<< HEAD
    // Create a new user with the plain text password
    $user = User::create([
        'nombre_user' => $request->nombre_user,
        'dni' => $request->dni,
        'nombre' => $request->nombre,
        'apellidos' => $request->apellidos,
        'telefono' => $request->telefono,
        'direccion' => $request->direccion,
        'password' => $request->contraseña,  // Utiliza la contraseña en texto plano
        'puesto' => $request->puesto,
        'incorporacion' => $request->incorporacion,
        'id_departamento' => $request->id_departamento,
        'id_evento' => $request->id_evento,
        'estado' => $request->estado,
    ]);

    // Redirigir a alguna página de éxito o mostrar un mensaje de éxito
    return redirect()->route('lista.emociones')->with('success', 'Usuario creado correctamente');
}
=======
        // Guardar el usuario en la base de datos
        User::create([
            'email' => $request -> nombre_user,
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
>>>>>>> 6da1508d7cea541e7181fd0473189c415d28feac


    public function listaEmociones()
    {
        // Recuperar todas las emociones de la base de datos
        $emociones = Evento::all();

        // Pasar las emociones a la vista
        return view('lista_emociones', ['emociones' => $emociones]);
    }

    public function Emociones()
    {
        return view('insertar_emocion');
    }
    public function Emociones()
    {
        return view('insertar_emocion');
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
        // Encontrar el evento
        $evento = Evento::find($id);
    
        // Encontrar la emoción asociada con el evento
        $emocion = Emocion::find($evento->emocion_id);
    
        // Actualizar los datos de la emoción
        $emocion->nombre_evento = $request->nombre_evento;
        $emocion->fecha = $request->fecha;
        $emocion->emocion = $request->emocion;
        $emocion->save();
    
        // Actualizar los datos del evento si es necesario
        $evento->nombre_evento = $request->nombre_evento;
        $evento->fecha = $request->fecha;
        $evento->save();
    
        return Redirect::to('evento')->with('notice', 'El evento ha sido modificado correctamente.');
    }

<<<<<<< HEAD
    //GUARDAR EMOCIONES 
    public function guardarEmocion(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'descripcion' => 'required|string|max:255',
        'emocion' => 'required|string|max:255',
        'dia_emocion' => 'required|date',
        'id_emocion' => 'required|integer', // Asegúrate de validar el id_emocion
    ]);

    // Obtener el valor de la emoción seleccionada
    $emocionValue = match ($request->emocion) {
        'muy_triste' => 1,
        'triste' => 2,
        'contento' => 3,
        'muy_contento' => 4,
        default => null,
    };

    // Crear un nuevo evento con los datos proporcionados
    Evento::create([
        'descripcion' => $request->descripcion,
        'emocion' => $emocionValue,
        'dia_emocion' => $request->dia_emocion,
        'id_emocion' => $request->id_emocion, // Asignar el id_emocion al evento
    ]);

    // Redirigir a alguna página de éxito o mostrar un mensaje de éxito
    return redirect()->route('lista.emociones')->with('success', 'Emoción guardada correctamente');
}
///////////////////////////////7


=======
>>>>>>> 90541aa6c82367c2edbf6adf1b5f6689b3b4377f
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect()->route('lista_emociones')->with('notice', 'El evento ha sido eliminado correctamente.')->with('noticeType', 'success');
    }

    public function guardarEmocion(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'descripcion' => 'required|string|max:255',
        'emocion' => 'required|string|max:255',
        'dia_emocion' => 'required|date',
        'id_emocion' => 'required|integer', // Asegúrate de validar el id_emocion
    ]);

    // Obtener el valor de la emoción seleccionada
    $emocionValue = match ($request->emocion) {
        'muy_triste' => 1,
        'triste' => 2,
        'contento' => 3,
        'muy_contento' => 4,
        default => null,
    };

    // Crear un nuevo evento con los datos proporcionados
    Evento::create([
        'descripcion' => $request->descripcion,
        'emocion' => $emocionValue,
        'dia_emocion' => $request->dia_emocion,
        'id_emocion' => $request->id_emocion, // Asignar el id_emocion al evento
    ]);

    // Redirigir a alguna página de éxito o mostrar un mensaje de éxito
    return redirect()->route('lista.emociones')->with('success', 'Emoción guardada correctamente');
}

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'nombre_user' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
    
        // Define the credentials array
        $credentials = $request->only('nombre_user', 'password');
        
        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Redirect to the dashboard if the login is successful
            return redirect()->intended('/lista.emociones');
        } else {
            // Redirect back to the login form with an error message if the login fails
            return back()->withErrors([
                'nombre_user' => 'Estas credenciales no coinciden con nuestros registros.',
            ]);
        }
    }
    
}
