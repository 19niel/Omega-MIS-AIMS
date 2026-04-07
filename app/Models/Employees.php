<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    // Define the table name (optional, but good practice since pluralization can be tricky)
    protected $table = 'employees';

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'position',
        'department',
        'branch',
        'email',
    ];
}
