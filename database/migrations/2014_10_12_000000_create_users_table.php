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
            $table->id();
            $table->string('username')->unique();
            $table->string('email');
            $table->string('photo')->nullable();
            $table->integer('status')->default(1);
            $table->string('password');
            $table->string('code_nationalite', 2)->index()->nullable();
            $table->rememberToken();
            $table->timestamps();


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
