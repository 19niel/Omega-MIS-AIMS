<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Login Routes
Route::get('/', [AuthController::class, 'showLogin']) ->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (Protected by 'auth' middleware)

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/assets', function () {
        return view('assets/assets');
    })->name('assets.index');

    Route::get('/users', function () {
        return view('users');
    })->name('users.index');