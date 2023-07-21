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
        Schema::create('societies', function (Blueprint $table) {

            //Columns
            $table->id();
            $table->string('title');
            $table->string('ice');
            $table->string('adress');
            $table->string('description', 3000);
            $table->string('image');
            $table->string('telephone');
            $table->string('fax')->nullable();
            $table->string('web_link');
            $table->unsignedBigInteger('demi_categorie_id')->nullable();
            $table->timestamps();

            //Foreigns
            $table->foreign('demi_categorie_id')->references('id')->on('demi_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('societies');
    }
};
