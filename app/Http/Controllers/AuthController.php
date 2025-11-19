<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        $titulo_pagina = 'Login de usuario';
        return view('modules.login.index', compact('titulo_pagina'));
    }

    public function validarLogin(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credenciales, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->with('error', 'Correo o contraseña incorrectos.');
    }

    public function home() {
        $titulo_pagina = 'Inicio';
        return view('modules.home.home', compact('titulo_pagina'));
    }
}