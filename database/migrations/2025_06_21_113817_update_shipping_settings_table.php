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
        $table->boolean('enable_discount_offer')->default(0)->nullable();
        $table->decimal('discount_percent', 5, 2)->default(0.00)->nullable();
        $table->decimal('discount_minimum_total', 8, 2)->default(0.00)->nullable();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drop the columns if you need to rollback
        Schema::table('shipping_settings', function (Blueprint $table) {
            $table->dropColumn('enable_discount_offer');
            $table->dropColumn('discount_percent');
            $table->dropColumn('discount_minimum_total');
        });
    }
};
