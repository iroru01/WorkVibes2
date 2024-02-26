<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

}

