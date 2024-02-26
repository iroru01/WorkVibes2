<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
    
        return redirect('/login')->with('success', '¡Registro exitoso! Por favor, inicia sesión.');
    
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Autenticación exitosa, redirige al usuario a la página deseada
                return redirect()->intended('/dashboard');
            }

    // Autenticación fallida, redirige al usuario de nuevo al formulario de inicio de sesión
        return redirect()->back()->withErrors(['message' => 'Credenciales incorrectas']);
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
