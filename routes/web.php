<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/usuarios',[AuthController::class,'usuarios'])->name('usuarios.index');

// Ruta para procesar el formulario POST de login
Route::post('/login', [AuthController::class, 'validarLogin'])->name('login.validar');

// Ruta home después de iniciar sesión
Route::get('/home', [AuthController::class, 'home'])->name('home');