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
        Schema::create('buying__stations', function (Blueprint $table) {
            $table->id();
            $table->string('station_name')->nullable();
            $table->integer('owner_user_id')->nullable();
            $table->string('license_no')->nullable();
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
        Schema::dropIfExists('buying__stations');
    }
};
