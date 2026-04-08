<?php

namespace App\Http\Controllers\Assets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeripheralsController extends Controller
{
        public function index() 
    {
        $employees = []; 
        $assets = []; 
        // Pointing to the new folder path: assets/laptops/index.blade.php
        return view('assets.peripherals.index', compact('employees', 'assets'));
    }
}
