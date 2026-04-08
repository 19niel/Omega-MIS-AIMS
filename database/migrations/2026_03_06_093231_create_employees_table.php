<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('department');
            $table->string('branch');
            $table->string('email')->unique();
            
            // NEW COLUMNS
            $table->json('current_assets')->nullable(); // Stores [101, 105, 202]
            $table->json('history_logs')->nullable();   // Stores IDs of history records
            $table->string('status')->default('Active'); // Active, Resigned, On Leave
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
