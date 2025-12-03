@extends('layouts.app')

@section('title', 'Crear Deporte')

@section('content')
<h1 class="mb-4 text-center">Crear Nuevo Deporte</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('sports.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('sports.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
