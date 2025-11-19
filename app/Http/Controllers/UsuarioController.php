<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    //Regrea la vista de usuarios
    public function usuarios(){
        $titulo_pagina = 'Administración de Usuarios';
        $usuarios = User::all();
        return view('modules.usuarios.index',compact('titulo_pagina','usuarios'));
    }

    //Regresa la vista para editar usarios
    public function edit($id) {
        $usuario = User::findOrFail($id);
        return view('modules.usuarios.edit', compact('usuario'));
    }

    //Actualiza los datos de usuario
    public function update(Request $request, $id) {
        $usuario = User::findOrFail($id);

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email'
        ]);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    //Activa o desactiva el usuario
    public function activar($id) {
        $usuario = User::findOrFail($id);
        $usuario->activo = 1;
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario activado.');
    }

    public function desactivar($id) {
        $usuario = User::findOrFail($id);
        $usuario->activo = 0;
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario desactivado.');
    }

    //Regresa la vista de cambiar password
    public function passwordForm($id) {
        $usuario = User::findOrFail($id);
        return view('modules.usuarios.password', compact('usuario'));
    }

    //Actualiza el password
    public function passwordUpdate(Request $request, $id) {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $usuario = User::findOrFail($id);
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Contraseña actualizada.');
    }
}
