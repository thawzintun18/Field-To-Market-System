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
        Schema::create('farmer__crops', function (Blueprint $table) {
            $table->id();
            $table->integer('farmer_id')->nullable();
            $table->string('crop')->nullable();
            $table->date('planting_date')->nullable();
            $table->date('estimated_harvest_date')->nullable();
            $table->integer('total_quantity')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer__crops');
    }
};
