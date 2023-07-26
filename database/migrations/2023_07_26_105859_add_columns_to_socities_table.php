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
        Schema::table('socities', function (Blueprint $table) {
            /* Socials*/
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('linkdin');

            /* Email*/
            $table->string('email');

            /* Coordinations */
            $table->string('coordinations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('socities', function (Blueprint $table) {
            /* Socials*/
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('instagram');
            $table->dropColumn('linkdin');

            /* Email*/
            $table->dropColumn('email');

            /* Coordinations */
            $table->dropColumn('coordinations');
        });
    }
};
