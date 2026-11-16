<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HousekeeperController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('housekeepers.index'));

// Hanya untuk yang belum login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Hanya untuk yang sudah login
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('housekeepers', HousekeeperController::class)->except('show');
});