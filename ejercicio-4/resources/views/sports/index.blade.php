@extends('layouts.app')

@section('title', 'Deportes')

@section('content')
<h1 class="mb-4 text-center">Lista de Deportes</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="mb-3 text-end">
    <a href="{{ route('sports.create') }}" class="btn btn-success">Crear Nuevo Deporte</a>
</div>

<table class="table table-striped table-hover">
    <thead class="table-primary">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sports as $sport)
        <tr>
            <td>{{ $sport->name }}</td>
            <td>{{ $sport->type }}</td>
            <td>{{ $sport->description }}</td>
            <td class="text-center">
                <a href="{{ route('sports.edit', $sport->id) }}" class="btn btn-sm btn-primary">Editar</a>

                <form action="{{ route('sports.destroy', $sport->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('¿Estás seguro de eliminar este deporte?');">
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
