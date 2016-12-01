<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEspecialista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialista', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_especialidad');
            $table->integer('visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('especialista');
    }
}
