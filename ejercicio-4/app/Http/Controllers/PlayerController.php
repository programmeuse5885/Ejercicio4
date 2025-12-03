<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with('team')->get();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('players.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'team_id' => 'required|exists:teams,id',
            'position' => 'nullable|string|max:255',
            'age' => 'nullable|integer',
            'nationality' => 'nullable|string|max:255',
        ]);

        Player::create($request->all());

        return redirect()->route('players.index')->with('success', 'Jugador creado correctamente');
    }

    public function edit(Player $player)
    {
        $teams = Team::all();
        return view('players.edit', compact('player', 'teams'));
    }

    public function update(Request $request, Player $player)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'team_id' => 'required|exists:teams,id',
            'position' => 'nullable|string|max:255',
            'age' => 'nullable|integer',
            'nationality' => 'nullable|string|max:255',
        ]);

        $player->update($request->all());

        return redirect()->route('players.index')->with('success', 'Jugador actualizado correctamente');
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index')->with('success', 'Jugador eliminado correctamente');
    }
}
