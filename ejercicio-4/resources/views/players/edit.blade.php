@extends('layouts.app')

@section('title', 'Editar Jugador')

@section('content')
<h1 class="mb-4 text-center">Editar Jugador</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('players.update', $player->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $player->name) }}" required>
    </div>

    <div class="mb-3">
        <label for="team_id" class="form-label">Equipo</label>
        <select name="team_id" class="form-select" required>
            <option value="">Selecciona un equipo</option>
            @foreach($teams as $team)
                <option value="{{ $team->id }}" {{ (old('team_id', $player->team_id) == $team->id) ? 'selected' : '' }}>
                    {{ $team->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="position" class="form-label">Posición</label>
        <input type="text" name="position" class="form-control" value="{{ old('position', $player->position) }}">
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Edad</label>
        <input type="number" name="age" class="form-control" value="{{ old('age', $player->age) }}">
    </div>

    <div class="mb-3">
        <label for="nationality" class="form-label">Nacionalidad</label>
        <input type="text" name="nationality" class="form-control" value="{{ old('nationality', $player->nationality) }}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea name="description" class="form-control">{{ old('description', $player->description) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Jugador</button>
    <a href="{{ route('players.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
