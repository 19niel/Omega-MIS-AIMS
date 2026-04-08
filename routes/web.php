<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeesController;

// 1. Import the new controllers from the sub-folder
use App\Http\Controllers\Assets\LaptopsController;
use App\Http\Controllers\Assets\DesktopsController;
use App\Http\Controllers\Assets\MonitorsController;
use App\Http\Controllers\Assets\PeripheralsController;

use Illuminate\Support\Facades\Route;

// Login Routes
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Assets Main Menu (The Category Selection Grid)
    Route::get('/assets', function () {
        return view('assets.index');
    })->name('assets.index');

    // 2. Updated Asset Category Routes
    // Each category now has its own "Brain" (Controller)
    Route::get('/assets/laptops', [LaptopsController::class, 'index'])->name('assets.laptops');
    Route::get('/assets/desktops', [DesktopsController::class, 'index'])->name('assets.desktops');
    Route::get('/assets/monitors', [MonitorsController::class, 'index'])->name('assets.monitors');
    Route::get('/assets/peripherals', [PeripheralsController::class, 'index'])->name('assets.peripherals');

    /**
     * CRUD Routes (Re-plan placeholders)
     * Note: You will eventually move these into their respective controllers 
     * as the specs for a Laptop differ from a Mouse.
     */
    Route::post('/assets/store', [LaptopsController::class, 'store'])->name('assets.store');
    Route::put('/assets/{id}', [LaptopsController::class, 'update'])->name('assets.update');
    Route::delete('/assets/{id}', [LaptopsController::class, 'destroy'])->name('assets.destroy');

    // Employees
    Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
    Route::post('/employees', [EmployeesController::class, 'store'])->name('employees.store');
    Route::delete('/employee/{employee}', [EmployeesController::class, 'destroy'])->name('employees.destroy');
});