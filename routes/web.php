<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/Logging', [AuthController::class, 'Logging'])->name('Logging');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registering', [AuthController::class, 'registering'])->name('registering');


use App\Http\Controllers\ProductController;
Route::get('/home', [ProductController::class,'home'])->name('home');

Route::get('/functions/create', [ProductController::class,'create'])->name('create');
Route::post('/products', [ProductController::class,'store'])->name('productStore');