<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citie_has_societies', function (Blueprint $table) {
            //Columns
            $table->id();
            $table->unsignedBigInteger('citie_id');
            $table->unsignedBigInteger('societie_id');
            $table->timestamps();

            //Foreigns
            $table->foreign('societie_id')->references('id')->on('societies')->onDelete('cascade');
            $table->foreign('citie_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citie_has_societies');
    }
};
