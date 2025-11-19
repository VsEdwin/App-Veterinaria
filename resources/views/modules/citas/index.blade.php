@extends('layouts.main')

@section('contenido')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold text-primary">Lista de Citas</h2>
        <a href="{{ route('citas.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nueva Cita
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Motivo</th>
                        <th>Cliente</th>
                        <th>Mascota</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($citas as $cita)
                        <tr>
                            <td>{{ $cita->fecha }}</td>
                            <td>{{ $cita->hora }}</td>
                            <td>{{ $cita->motivo }}</td>
                            <td>{{ $cita->cliente }}</td>
                            <td>{{ $cita->mascota }}</td>
                            <td>{{ $cita->telefono }}</td>

                            <td>
                                <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta cita definitivamente?')">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" class="text-center">No hay citas registradas.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
