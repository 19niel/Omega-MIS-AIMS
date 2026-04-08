<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; 
use Illuminate\Support\Facades\File;
class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all(); 

        // Load the JSON mapping from resources/json
        $mappingPath = resource_path('json/mapping.json');
        
        // Change get_contents to get
        $branchMapping = File::exists($mappingPath) 
            ? json_decode(File::get($mappingPath), true) 
            : [];

        return view('employees.index', compact('employees', 'branchMapping'));
    }


    public function store(Request $request)
    {
        // 1. Capture and save the data
        \App\Models\Employee::create($request->all());

        // 2. Refresh the page so the new user shows up in the table
        return redirect()->back()->with('success', 'Employee Added!');
    }

    public function destroy(\App\Models\Employee $employee)
    {
        $employee->delete();
        return redirect()->back()->with('success', 'Employee deleted successfully');
    }

}