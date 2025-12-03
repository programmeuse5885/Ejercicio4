@extends('layouts.app')

@section('title', 'Jugadores')

@section('content')
<h1 class="mb-4 text-center">Lista de Jugadores</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="mb-3 text-end">
    <a href="{{ route('players.create') }}" class="btn btn-success">Crear Nuevo Jugador</a>
</div>

<table class="table table-striped table-hover">
    <thead class="table-primary">
        <tr>
            <th>Nombre</th>
            <th>Equipo</th>
            <th>Posición</th>
            <th>Edad</th>
            <th>Nacionalidad</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($players as $player)
            <tr>
                <td>{{ $player->name }}</td>
                <td>{{ $player->team->name }}</td>
                <td>{{ $player->position }}</td>
                <td>{{ $player->age }}</td>
                <td>{{ $player->nationality }}</td>
                <td class="text-center">
                    <a href="{{ route('players.edit', $player->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{ route('players.destroy', $player->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este jugador?');">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="text-center mt-3">
    <a href="{{ route('home') }}" class="btn btn-secondary">Volver al Inicio</a>
</div>
@endsection
