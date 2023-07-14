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
        Schema::create('societie_has_tags', function (Blueprint $table) {
            //Columns
            $table->id();
            $table->unsignedBigInteger('societie_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            //Foreigns
            $table->foreign('societie_id')->references('id')->on('societies')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_has_tags');
    }
};
