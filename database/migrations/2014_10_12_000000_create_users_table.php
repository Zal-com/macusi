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
        Schema::create('users', function (Blueprint $table) {
            $table->string('username')->primary();
            $table->string('email');
            $table->string('photo');
            $table->integer('status');
            $table->string('password');
            $table->string('code_nationalite', 2)->index();
            $table->rememberToken();


            //Foreign Keys
            $table->foreign('code_nationalite')->references('code')->on('nationalites')
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
        Schema::dropIfExists('users');
    }
};
