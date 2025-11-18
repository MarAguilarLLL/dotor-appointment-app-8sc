<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

//Gestion de roles
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);