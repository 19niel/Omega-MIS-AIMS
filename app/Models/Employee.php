<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'position', 'department', 'branch', 'email', 
        'current_assets', 'history_logs', 'status'
    ];

    // This converts the JSON string from the DB into a PHP Array automatically
    protected $casts = [
        'current_assets' => 'array',
        'history_logs' => 'array',
    ];
}
