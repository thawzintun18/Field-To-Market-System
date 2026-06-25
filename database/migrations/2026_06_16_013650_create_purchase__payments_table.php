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
        Schema::create('purchase__payments', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_id')->nullable();
            $table->bigInteger('total_amount')->nullable();
            $table->bigInteger('paid_amount')->nullable();
            $table->bigInteger('remaining_amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase__payments');
    }
};
