<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Login Routes
Route::get('/', [AuthController::class, 'showLogin']) ->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (Protected by 'auth' middleware)

Route::middleware('auth')->group(function (){


    //Dashaboard
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    // Assets Main Menu (The grid with each Assets)
    Route::get('/assets', function(){
        return view('assets.index');
    })->name('assets.index');

    // Assets Categories (This opens laptop.blade, pc.blade, etc...)
    // the {category} acts like a variable
    Route::get('/assets/{category}', function ($category){
        if (view()->exists("assets.$category")){
            return view("assets.$category");
        }
        return abort(404);
    })->name('assets.category');

    //Users Page
    Route::get('/employees', function(){
        return view('employees.index');
    })->name('/employees/index');
});


