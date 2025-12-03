<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayerController;

// Página principal
Route::get('/', function () {
    return view('index'); // vista principal
})->name('home');

// Deportes
Route::get('/sports', [SportsController::class, 'index'])->name('sports.index');
Route::get('/sports/create', [SportsController::class, 'create'])->name('sports.create');
Route::post('/sports', [SportsController::class, 'store'])->name('sports.store');
Route::get('/sports/{sport}/edit', [SportsController::class, 'edit'])->name('sports.edit');
Route::put('/sports/{sport}', [SportsController::class, 'update'])->name('sports.update');
Route::delete('/sports/{sport}', [SportsController::class, 'destroy'])->name('sports.destroy');

// Equipos
Route::get('/teams', [TeamsController::class, 'index'])->name('teams.index');
Route::get('/teams/create', [TeamsController::class, 'create'])->name('teams.create');
Route::post('/teams', [TeamsController::class, 'store'])->name('teams.store');
Route::get('/teams/{team}/edit', [TeamsController::class, 'edit'])->name('teams.edit');
Route::put('/teams/{team}', [TeamsController::class, 'update'])->name('teams.update');
Route::delete('/teams/{team}', [TeamsController::class, 'destroy'])->name('teams.destroy');


// Jugadores
Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
Route::post('/players', [PlayerController::class, 'store'])->name('players.store');
Route::get('/players/{player}/edit', [PlayerController::class, 'edit'])->name('players.edit');
Route::put('/players/{player}', [PlayerController::class, 'update'])->name('players.update');
Route::delete('/players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');














