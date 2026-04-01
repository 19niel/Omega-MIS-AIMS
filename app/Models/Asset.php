<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function ip(): void 
    {
       Schema::create('assets', function (Blueprint $table) {
        $table->id();
        $table->string('category'); // Laptop, PC, etc.
        $table->string('brand');
        $table->string('model');
        $table->text('specs')->nullable();
        $table->string('status')->default('Available');
        
        // Tracking who has it
        $table->unsignedBigInteger('issued_to')->nullable();
        $table->foreign('issued_to')->references('id')->on('users')->onDelete('set null');

        $table->timestamps(); // creates date_created and date_modified
    });
    }
}
