<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactoController;

// Ruta principal de login
Route::get('/', [AuthController::class, 'showLogin'])->name('auth.login');

// Ruta de login (POST) para procesar la autenticación
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.post');

// Ruta de registro (si aplica)
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Ruta para recuperar la contraseña
Route::post('/recuperar-password', [AuthController::class, 'recuperarPassword'])->name('auth.recuperar');

// Ruta para la página de inicio
Route::get('/inicio', function () {
    return view('inicio');
});

// Ruta para consultar (ver el formulario de facturas)
Route::get('/consultar', [PaginaController::class, 'consultar'])->name('consultar');
Route::post('/consultar', [PaginaController::class, 'guardarFactura'])->name('consultar.guardar');

// Ruta para descargar una factura
Route::get('/factura/{id}/descargar', [PaginaController::class, 'descargar'])->name('factura.descargar');

// Ruta del dashboard, que requiere autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Puedes agregar más rutas si las necesitas
