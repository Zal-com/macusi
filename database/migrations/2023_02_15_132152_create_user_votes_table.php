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
        Schema::create('user_votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sug');
            $table->foreignId('voter_id')->index();
            $table->integer('vote_type');

            //Foreign Keys
            $table->foreign('id_sug')->references('id_sug')->on('mot_travails')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('voter_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_votes');
    }
};
