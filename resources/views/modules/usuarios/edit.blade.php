@extends('layouts.main')

@section('contenido')

<div class="container mt-4">
    <h2>Editar Usuario</h2>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ $usuario->name }}" required>
        </div>

        <div class="mb-3">
            <label>Correo</label>
            <input type="email" class="form-control" name="email" value="{{ $usuario->email }}" required>
        </div>

        <button class="btn btn-primary">Guardar cambios</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

@endsection
