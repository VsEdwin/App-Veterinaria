@extends('layouts.main')

@section('contenido')
<div class="container mt-4">
    <h2 class="fw-bold text-warning mb-3">
        <i class="bi bi-pencil-square"></i> Editar Cita
    </h2>

    <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{ route('citas.update', $cita->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" name="fecha" class="form-control" value="{{ $cita->fecha }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="hora" class="form-label">Hora</label>
                        <input type="time" name="hora" class="form-control" value="{{ $cita->hora }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="motivo" class="form-label">Motivo</label>
                    <input type="text" name="motivo" class="form-control" value="{{ $cita->motivo }}" required>
                </div>

                <div class="mb-3">
                    <label for="cliente" class="form-label">Cliente</label>
                    <input type="text" name="cliente" class="form-control" value="{{ $cita->cliente }}" required>
                </div>

                <div class="mb-3">
                    <label for="mascota" class="form-label">Mascota</label>
                    <input type="text" name="mascota" class="form-control" value="{{ $cita->mascota }}" required>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{ $cita->telefono }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('citas.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Volver
                    </a>

                    <button type="submit" class="btn btn-warning text-white">
                        <i class="bi bi-save"></i> Actualizar Cita
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
