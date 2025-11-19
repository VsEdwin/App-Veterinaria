<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;


class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $titulo_pagina = 'Control De Citas';
        $citas = Cita::all();
        return view('modules.citas.index', compact('titulo_pagina','citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titulo_pagina = 'Crear Nueva Cita';
        return view('modules.citas.create',compact('titulo_pagina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cita::create($request->all());

        return redirect()->route('citas.index')->with('success', 'Cita creada');
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
    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        return view('modules.citas.edit', compact('cita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'motivo' => 'required',
            'cliente' => 'required',
            'mascota' => 'required',
            'telefono' => 'required'
        ]);

        $cita = Cita::findOrFail($id);
        $cita->update($request->all());

        return redirect()->route('citas.index')
                        ->with('success', 'Cita actualizada correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cita = Cita::findOrFail($id);
        $cita->delete();

        return redirect()->route('citas.index')->with('success', 'Cita eliminada correctamente.');
    }

}
