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
        Schema::create('supplier_sell_fish', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_name');
            $table->integer('customer_name');
            $table->string('fish_name');
            $table->decimal('fish_rate');
            $table->decimal('fish_weight');
            $table->decimal('fish_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_sell_fish');
    }
};
