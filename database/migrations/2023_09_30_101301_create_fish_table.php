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
        Schema::create('fish', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->comment('input here fish name');
            $table->string('slug')->unique()->comment('input here fish slug');
            $table->integer('weight')->comment('input here fish weight');
            $table->decimal('rate')->comment('input here fish rate');
            $table->decimal('rate')->comment('input here fish rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fish');
    }
};
