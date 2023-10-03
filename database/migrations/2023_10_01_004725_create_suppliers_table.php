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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id')->unique();
            $table->string('name');
            $table->string('slug');
            $table->string('email')->nullable();
            $table->string('phone')->nullable()->comment('supplier details phone');
            $table->string('address')->nullable()->comment('supplier details address');
            $table->string('photo')->nullable()->comment('supplier details photo');
            $table->string('details')->nullable()->comment('supplier details');
            $table->enum('status',['active','inactive'])->default('active')->nullable()->comment('supplier active or inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
