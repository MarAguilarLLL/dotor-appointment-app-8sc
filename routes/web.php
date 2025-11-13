<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Rutas para administración
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // Ruta para usuarios
    Route::get('/users', function () {
        return view('admin.users.index');
    })->name('users.index');
    
    // O si prefieres usar un controlador:
    // Route::get('/users', [UserController::class, 'index'])->name('users.index');
});