@extends('layouts.app')

@section('title', 'Editar Equipo')

@section('content')
<h1 class="mb-4 text-center">Editar Equipo</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('teams.update', $team->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Nombre del Equipo</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $team->name) }}" required>
    </div>

    <div class="mb-3">
        <label for="sport_id" class="form-label">Deporte</label>
        <select name="sport_id" class="form-select" required>
            <option value="">Selecciona un deporte</option>
            @foreach($sports as $sport)
                <option value="{{ $sport->id }}" {{ old('sport_id', $team->sport_id) == $sport->id ? 'selected' : '' }}>
                    {{ $sport->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="city" class="form-label">Ciudad</label>
        <input type="text" name="city" class="form-control" value="{{ old('city', $team->city) }}">
    </div>

    <div class="mb-3">
        <label for="coach" class="form-label">Entrenador</label>
        <input type="text" name="coach" class="form-control" value="{{ old('coach', $team->coach) }}">
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Equipo</button>
    <a href="{{ route('teams.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
