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
        Schema::table('shipping_settings', function (Blueprint $table) {
            $table->decimal('inside_dhaka_cost', 8, 2)->default(60.00)->nullable();
            $table->decimal('outside_dhaka_cost', 8, 2)->default(120.00)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipping_settings', function (Blueprint $table) {
            // drop the columns if you need to rollback
            $table->dropColumn('inside_dhaka_cost');
            $table->dropColumn('outside_dhaka_cost');
        });
    }
};
