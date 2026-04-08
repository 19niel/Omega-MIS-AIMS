<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    // These must match your migration column names exactly
    protected $fillable = [
        'category', 
        'brand', 
        'model', 
        'cpu', 
        'ram', 
        'storage', 
        'image', 
        'status', 
        'issued_to', 
        'recent_owner', 
        'history_logs'
    ];

    // This ensures history_logs is treated as an array in PHP
    protected $casts = [
        'history_logs' => 'array',
    ];

    /**
     * Relationship: An asset belongs to an employee.
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'issued_to');
    }

    public function histories()
    {
        return $this->hasMany(History::class, 'asset_id')->latest();
    }
}
