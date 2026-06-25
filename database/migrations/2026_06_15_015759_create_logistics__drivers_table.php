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
        Schema::create('logistics__drivers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('license_no')->nullable();
            $table->string('license_expiry_date')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('vehicle_capacity')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('township')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logistics__drivers');
    }
};
