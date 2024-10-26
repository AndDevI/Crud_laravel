<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/Logging', [AuthController::class, 'Logging'])->name('Logging');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registering', [AuthController::class, 'registering'])->name('registering');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


use App\Http\Controllers\ProductController;
Route::controller(ProductController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/functions/create', 'create')->name('create');
    Route::post('/products', 'store')->name('store');
    Route::get('/functions/{product}/edit', 'edit')->name('edit');
    Route::put('/functions/{product}', 'update')->name('update');
    Route::delete('/functions/{product}', 'destroy')->name('destroy');
});

