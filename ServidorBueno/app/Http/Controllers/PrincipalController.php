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
        $user= new usuario();
        return View('noticias.save',[
        'noticia'   =>$noticia
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
        //
        
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
}
