@extends('layouts.app')

@section('title', 'Editar Deporte')

@section('content')
<h1 class="mb-4 text-center">Editar Deporte</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('sports.update', $sport->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $sport->name }}" required>
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ $sport->type }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description">{{ $sport->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="{{ route('sports.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
