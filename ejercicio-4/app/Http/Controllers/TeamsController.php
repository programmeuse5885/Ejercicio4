<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Sport;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::with('sport')->get();
        return view('teams.index', compact('teams'));
    }

    public function create()
    {
        $sports = Sport::all();
        return view('teams.create', compact('sports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'coach' => 'nullable|string|max:255',
            'sport_id' => 'required|exists:sports,id',
        ]);

        Team::create($request->all());

        return redirect()->route('teams.index')->with('success', 'Equipo creado correctamente.');
    }

    public function edit(Team $team)
    {
        $sports = Sport::all();
        return view('teams.edit', compact('team', 'sports'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'coach' => 'nullable|string|max:255',
            'sport_id' => 'required|exists:sports,id',
        ]);

        $team->update($request->all());

        return redirect()->route('teams.index')->with('success', 'Equipo actualizado correctamente.');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Equipo eliminado correctamente.');
    }
}
