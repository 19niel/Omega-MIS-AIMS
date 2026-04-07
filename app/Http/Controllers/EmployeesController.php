<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees; 

class EmployeesController extends Controller
{
    public function index()
    {
        // Now the controller knows to look in App\Models\Employees
        $employees = Employees::all(); 

        return view('employees.index', compact('employees'));
    }


    public function store(Request $request)
    {
        // 1. Capture and save the data
        \App\Models\Employees::create($request->all());

        // 2. Refresh the page so the new user shows up in the table
        return redirect()->back()->with('success', 'Employee Added!');
    }

}