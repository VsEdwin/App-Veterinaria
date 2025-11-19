<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;

//Vista de login
Route::get('/', [AuthController::class, 'login'])->name('login');

// Ruta para procesar el formulario POST de login
Route::post('/login', [AuthController::class, 'validarLogin'])->name('login.validar');

// Ruta home después de iniciar sesión
Route::get('/home', [AuthController::class, 'home'])->name('home');

//Vista de usuarios
Route::get('/usuarios', [UsuarioController::class, 'usuarios'])->name('usuarios.index');

//Editar usuario
Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');

//Activar / Desactivar usuario
Route::put('/usuarios/{id}/activar', [UsuarioController::class, 'activar'])->name('usuarios.activar');
Route::put('/usuarios/{id}/desactivar', [UsuarioController::class, 'desactivar'])->name('usuarios.desactivar');

//Cambiar password usuario
Route::get('/usuarios/{id}/password', [UsuarioController::class, 'passwordForm'])->name('usuarios.password');
Route::put('/usuarios/{id}/password', [UsuarioController::class, 'passwordUpdate'])->name('usuarios.password.update');

//Vista de citas
Route::get('/citas', [CitaController::class, 'index'])->name('citas.index');

//Vista Crear Cita
Route::get('/citas/create', [CitaController::class, 'create'])->name('citas.create');
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');

//Vista Editar Cita
Route::get('/citas/{id}/edit', [CitaController::class, 'edit'])->name('citas.edit');
Route::put('/citas/{id}', [CitaController::class, 'update'])->name('citas.update');

//Vista Eliminar Cita
Route::delete('/citas/{id}', [CitaController::class, 'destroy'])->name('citas.destroy');


