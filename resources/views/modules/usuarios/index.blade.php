@extends('layouts.main')

@section('contenido')

<div class="container mt-4">
    <h2 class="mb-4"> Administracion De Usuarios</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Editar</th>
                <th>Activar/Desactivar</th>
                <th>Actualizar Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>

                <td>
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-sm">
                        Editar
                    </a>
                </td>

                <td>
                    @if($usuario->activo)
                        <form action="{{ route('usuarios.desactivar', $usuario->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-danger btn-sm">Desactivar</button>
                        </form>
                    @else
                        <form action="{{ route('usuarios.activar', $usuario->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-success btn-sm">Activar</button>
                        </form>
                    @endif
                </td>

                <td>
                    <a href="{{ route('usuarios.password', $usuario->id) }}" class="btn btn-primary btn-sm">
                        Actualizar Password
                    </a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection