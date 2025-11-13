<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        $titulo_pagina = 'Login de usuario';
        return view('modules.login.index', compact('titulo_pagina'));
    }
}