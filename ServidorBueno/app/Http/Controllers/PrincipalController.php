<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //Hay que crear un metodo register que será un store que es donde guardaremos toda la info y de aqui nos redirigirá a una funcion que es create para crear los usuarios y guardar los usuarios en la base de datos
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
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
}



