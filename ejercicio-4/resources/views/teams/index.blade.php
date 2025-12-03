@extends('layouts.app')

@section('title', 'Equipos')

@section('content')
<h1 class="mb-4 text-center">Lista de Equipos</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="mb-3 text-end">
    <a href="{{ route('teams.create') }}" class="btn btn-success">Crear Nuevo Equipo</a>
</div>

<table class="table table-striped table-hover">
    <thead class="table-primary">
        <tr>
            <th>Nombre</th>
            <th>Deporte</th>
            <th>Ciudad</th>
            <th>Entrenador</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->sport->name }}</td>
            <td>{{ $team->city }}</td>
            <td>{{ $team->coach }}</td>
            <td class="text-center">
                <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-primary">Editar</a>

                <form action="{{ route('teams.destroy', $team->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('¿Estás seguro de eliminar este equipo?');">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="text-center">
    <a href="{{ route('home') }}" class="btn btn-secondary">Volver al Inicio</a>
</div>
@endsection
