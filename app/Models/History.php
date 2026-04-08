<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    // Explicitly define table name since 'history' isn't standard plural 'histories'
    protected $table = 'history';

    protected $fillable = [
        'asset_id',
        'employee_id',
        'action',
        'description',
        'remarks'
    ];

    // Relationship back to the Asset
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    // Relationship to the Employee involved
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}