@extends('layouts.main')

@section('contenido')
<div class="container mt-4">

    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="fw-bold mb-0">
                <i class="bi bi-calendar-plus"></i> Registrar Nueva Cita
            </h3>
        </div>

        <div class="card-body">

            {{-- Mostrar errores --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Hubo algunos problemas:</strong>
                    <ul class="mt-2 mb-0">
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('citas.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Fecha</label>
                        <input type="date" name="fecha" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Hora</label>
                        <input type="time" name="hora" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Motivo</label>
                    <input type="text" name="motivo" class="form-control"
                           placeholder="Ej: Vacunación, consulta general, desparasitación…" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Cliente</label>
                    <input type="text" name="cliente" class="form-control"
                           placeholder="Nombre del dueño" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Mascota</label>
                    <input type="text" name="mascota" class="form-control"
                           placeholder="Nombre de la mascota" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Teléfono</label>
                    <input type="text" name="telefono" class="form-control"
                           placeholder="Ej: 555-123-4567" required>
                </div>

                <div class="text-center">
                    <button class="btn btn-success px-4">
                        <i class="bi bi-check2-circle"></i> Guardar Cita
                    </button>

                    <a href="{{ route('citas.index') }}" class="btn btn-secondary px-4 ms-2">
                        <i class="bi bi-arrow-left"></i> Cancelar
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
