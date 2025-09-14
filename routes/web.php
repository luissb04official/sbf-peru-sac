<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactoController; // 👈 Importar controlador de contacto

Route::get('/', [AuthController::class, 'showLogin'])->name('login');

Route::get('/SBF Perú', function () {
    return "";
});

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/recuperar-password', [AuthController::class, 'recuperarPassword'])->name('auth.recuperar');

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/consultar', [PaginaController::class, 'consultar']);
Route::post('/consultar', [PaginaController::class, 'guardarFactura'])->name('consultar.guardar');
Route::get('/factura/{id}/descargar', [PaginaController::class, 'descargar'])->name('factura.descargar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


