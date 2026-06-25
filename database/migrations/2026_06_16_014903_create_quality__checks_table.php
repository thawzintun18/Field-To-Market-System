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
        Schema::create('quality__checks', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_id')->nullable();
            $table->decimal('moisture_percentage')->nullable();
            $table->decimal('impurity_percentage')->nullable();
            $table->integer('assigned_grade_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quality__checks');
    }
};
