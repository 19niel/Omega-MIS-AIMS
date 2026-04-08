<?php

namespace App\Http\Controllers\Assets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitorsController extends Controller
{
       public function index() 
    {
        $employees = []; 
        $assets = []; 
        // Pointing to the new folder path: assets/laptops/index.blade.php
        return view('assets.monitors.index', compact('employees', 'assets'));
    }
}
