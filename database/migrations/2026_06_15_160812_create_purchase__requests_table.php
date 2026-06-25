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
        Schema::create('purchase__requests', function (Blueprint $table) {
            $table->id();
            $table->integer('farmer_crop_id')->nullable();
            $table->integer('broker_id')->nullable();
            $table->bigInteger('offered_price')->nullable();
            $table->string('requested_quantity')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase__requests');
    }
};
