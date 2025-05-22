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
        Schema::create('video_sections', function (Blueprint $table) {
            $table->id();
            $table->string('thumb_image')->nullable(); // video thumbnail image
            $table->string('video_url')->nullable(); // video file URL (path)
            $table->string('title');
            $table->text('description');

            // Stat 1
            $table->string('stat1_icon')->nullable();
            $table->string('stat1_number')->nullable();
            $table->string('stat1_text')->nullable();

            // Stat 2
            $table->string('stat2_icon')->nullable();
            $table->string('stat2_number')->nullable();
            $table->string('stat2_text')->nullable();

            $table->string('button_url')->nullable();
            $table->string('button_text')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_sections');
    }
};
