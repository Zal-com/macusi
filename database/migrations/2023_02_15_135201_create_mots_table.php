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
        Schema::create('mots', function (Blueprint $table) {
            $table->id('id');
            $table->string('mot1', 2)->index();
            $table->string('mot2', 2)->index();
            $table->string('mot3', 2)->index();
            $table->string('mot4', 2)->index();
            $table->string('mot5', 2)->index();
            $table->string('mot6', 2)->index();
            $table->string('enMacusi', 12);
            $table->date('dateAjout');
            $table->text('explication');
            $table->json('trads');

            //Foreign keys
            $table->foreign('mot1')->references('syllabe')->on('syllabes');
            $table->foreign('mot2')->references('syllabe')->on('syllabes');
            $table->foreign('mot3')->references('syllabe')->on('syllabes');
            $table->foreign('mot4')->references('syllabe')->on('syllabes');
            $table->foreign('mot5')->references('syllabe')->on('syllabes');
            $table->foreign('mot6')->references('syllabe')->on('syllabes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mots');
    }
};
