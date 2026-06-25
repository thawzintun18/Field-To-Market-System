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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('farmer_crops_id')->nullable();
            $table->decimal('total_gross_weight')->nullable();
            $table->decimal('total_deduction')->nullable();
            $table->decimal('net_weight')->nullable();
            $table->decimal('price_per_unit')->nullable();
            $table->decimal('total_amount')->nullable();
            $table->date('purchased_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
