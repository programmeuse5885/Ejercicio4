<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    //Muestra una lista de deportes
    public function index()
    {
        $sports = Sport::all();
        return view(view:'sports.index', data:compact('sports'));
    }

    // Formulario para crear nuevo deporte
    public function create()
    {
        return view('sports.create');
    }

    // Guardar nuevo deporte
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'nullable',
        ]);

        Sport::create($request->all());

        return redirect()->route('sports.index')
                         ->with('success', 'Deporte creado correctamente.');
    }

    // Formulario para editar un deporte existente
    public function edit(Sport $sport)
    {
        return view('sports.edit', compact('sport'));
    }

    // Actualizar deporte
    public function update(Request $request, Sport $sport)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'nullable',
        ]);

        $sport->update($request->all());

        return redirect()->route('sports.index')
                         ->with('success', 'Deporte actualizado correctamente.');
    }

    // Eliminar deporte
    public function destroy(Sport $sport)
    {
        $sport->delete();
        return redirect()->route('sports.index')
                         ->with('success', 'Deporte eliminado correctamente.');
    }
    
}
