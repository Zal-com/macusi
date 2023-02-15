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
        Schema::create('type_mots', function (Blueprint $table) {
            $table->foreignId('id_type');
            $table->foreignId('id_mot');

            //Foreign Keys
            $table->foreign('id_type')->references('id')->on('types');
            $table->foreign('id_mot')->references('id')->on('mots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_mots');
    }
};
