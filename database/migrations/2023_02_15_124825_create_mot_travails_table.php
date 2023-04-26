<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('mot_travails', function (Blueprint $table) {
            $table->id('id_sug');
            $table->string('mot1_sug', 2)->index();
            $table->string('mot2_sug', 2)->index();
            $table->string('mot3_sug', 2)->index();
            $table->string('mot4_sug', 2)->index();
            $table->string('mot5_sug', 2)->index();
            $table->string('mot6_sug', 2)->index();
            $table->string('enMacusi_sug', 12);
            $table->date('dateAjout_sug')->default(DB::raw(('CURRENT_TIMESTAMP')));
            $table->text('explication_sug');
            $table->smallInteger('isValidated_sug');
            $table->string('submitter_sug')->index();
            $table->json('trads_sug');

            //Foreign keys
            $table->foreign('mot1_sug')->references('syllabe')->on('syllabes');
            $table->foreign('mot2_sug')->references('syllabe')->on('syllabes');
            $table->foreign('mot3_sug')->references('syllabe')->on('syllabes');
            $table->foreign('mot4_sug')->references('syllabe')->on('syllabes');
            $table->foreign('mot5_sug')->references('syllabe')->on('syllabes');
            $table->foreign('mot6_sug')->references('syllabe')->on('syllabes');
            $table->foreign('submitter_sug')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mot_travails');
    }
};
