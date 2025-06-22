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
        Schema::create('pathologies', function (Blueprint $table) {
            $table->id();
            $table->string('name');                      // Customer's name
            $table->string('phone')->nullable();       // Phone number 
            $table->string('subject')->nullable();       // Address
            $table->string('prescription_photo')->nullable(); // Filename of uploaded prescription
            $table->text('message')->nullable();         // Custom message
            $table->timestamps();                        // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pathologies');
    }
};
