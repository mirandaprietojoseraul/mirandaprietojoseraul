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
        Schema::create('place_to_eats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('food_type');
            $table->integer('rating')->nullable();
            $table->boolean('visited')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_to_eats');
    }
};
