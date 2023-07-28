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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('content',1000);
            $table->unsignedBigInteger('societie_id');
            $table->string('service_rating');
            $table->string('price_rating');
            $table->string('quality_rating');
            $table->string('location_rating');
            $table->timestamps();

            $table->foreign('societie_id')->references('id')->on('societies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
