<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        $titulo_pagina = 'Login de usuario';
        return view('modules.login.index', compact('titulo_pagina'));
    }
    public function usuarios(){
        $titulo_pagina = 'Listado de usuarios';
        $usuarios = User::all();
        return view('modules.usuarios.index',compact('titulo_pagina','usuarios'));
    }
}