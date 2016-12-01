<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlanificacionHoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planificacion_hora', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('desde');
            $table->time('hasta');
            $table->integer('id_especialista');
            $table->integer('id_clinica');
            $table->integer('user_auth');
            $table->integer('estado');
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
        Schema::drop('planificacion_hora');
    }
}
