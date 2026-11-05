<?php

use App\Http\Controllers\AprendizController;
use Illuminate\Support\Facades\Route;

// Redirigir la raíz hacia aprendices
Route::redirect('/', '/aprendices');

// Ruta que busca Laravel Breeze por defecto al registrarse o iniciar sesión
Route::get('/dashboard', function () {
    return redirect()->route('aprendices.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Proteger el módulo de aprendices requiriendo autenticación
Route::middleware(['auth'])->group(function () {
    Route::resource('aprendices', AprendizController::class);
});

require __DIR__.'/auth.php';
