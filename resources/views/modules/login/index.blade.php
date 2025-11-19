@extends('layouts.main')

@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5"> 
            <div class="card shadow-lg border-0 rounded-4">

                <div class="text-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </div>

                <div class="card-header text-center bg-white border-0 pb-0">
                    <h3 class="mb-0 fw-bold">Iniciar Sesión</h3>
                </div>

                <div class="card-body p-4">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{route('login.validar')}}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"  name="email" placeholder="Ingresa tu correo"  value="{{ old('email') }}" required>
                            <label for="email">Correo electrónico</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password"  class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="********" required>
                            <label for="password">Contraseña</label>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    Recordarme
                                </label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg"> Iniciar sesión </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center bg-white border-0 pt-0">
                    <small>¿No tienes cuenta? <a href="" class="fw-bold text-decoration-none">Regístrate</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection