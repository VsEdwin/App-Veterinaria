@extends('layouts.main')

@section('contenido')

<div class="container mt-5 home-container">
    <div class="text-center mb-4">
        <img src="{{ asset('img/perro.jpeg') }}" alt="Veterinaria" class="home-banner">
    </div>

    <h1 class="fw-bold text-primary text-center">Centro de Caricias Prohibidas… Pero Necesarias</h1>
    <p class="text-muted text-center">Explora las secciones usando el menú superior.</p>
</div>

@endsection
