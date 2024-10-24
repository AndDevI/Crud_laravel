<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
Route::get('/', [AuthController::class, 'index'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registering', [AuthController::class, 'registering'])->name('registering');