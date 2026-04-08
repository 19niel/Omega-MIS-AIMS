<?php

namespace App\Http\Controllers\Assets; // Note the updated namespace

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaptopsController extends Controller
{
    public function index() 
    {
        $employees = []; 
        $assets = []; 
        // Pointing to the new folder path: assets/laptops/index.blade.php
        return view('assets.laptops.index', compact('employees', 'assets'));
    }
}