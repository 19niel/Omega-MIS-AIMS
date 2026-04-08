<?php

namespace App\Http\Controllers\Assets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesktopsController extends Controller
{
        public function index() 
    {
        $employees = []; 
        $assets = []; 
        // Pointing to the new folder path: assets/laptops/index.blade.php
        return view('assets.desktops.index', compact('employees', 'assets'));
    }
}
