<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/usuarios',[AuthController::class,'usuarios'])->name('usuarios.index');