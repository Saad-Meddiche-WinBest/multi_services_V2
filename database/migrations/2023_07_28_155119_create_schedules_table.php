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
        Schema::create('schedules', function (Blueprint $table) {

            // Columns
            $table->id();
            $table->unsignedBigInteger('societie_id');
            $table->unsignedBigInteger('day_id');
            $table->time('from');
            $table->time('until');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('societie_id')->references('id')->on('societies')->onDelete('cascade');
            $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
