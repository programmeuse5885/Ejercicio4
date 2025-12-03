@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="d-flex flex-wrap justify-content-center gap-4">

    <!-- Card Deportes -->
    <div class="card card-hover shadow-sm border-0 text-center p-4" style="width: 300px;">
        <i class="bi bi-basketball" style="font-size: 2rem;"></i>
        <h4 class="card-title mt-2 mb-3">Deportes</h4>
        <p class="card-text">Administra los diferentes tipos de deportes registrados en el sistema.</p>
        <a href="{{ route('sports.index') }}" class="btn btn-primary w-100">Ir a Deportes</a>
    </div>

    <!-- Card Equipos -->
    <div class="card card-hover shadow-sm border-0 text-center p-4" style="width: 300px;">
        <i class="bi bi-people" style="font-size: 2rem;"></i>
        <h4 class="card-title mt-2 mb-3">Equipos</h4>
        <p class="card-text">Administra los equipos asociados a cada deporte.</p>
        <a href="{{ route('teams.index') }}" class="btn btn-primary w-100">Ir a Equipos</a>
    </div>

    <!-- Card Jugadores -->
    <div class="card card-hover shadow-sm border-0 text-center p-4" style="width: 300px;">
        <i class="bi bi-person-badge" style="font-size: 2rem;"></i>
        <h4 class="card-title mt-2 mb-3">Jugadores</h4>
        <p class="card-text">Administra los jugadores pertenecientes a cada equipo.</p>
        <a href="{{ route('players.index') }}" class="btn btn-primary w-100">Ir a Jugadores</a>
    </div>

</div>
@endsection
