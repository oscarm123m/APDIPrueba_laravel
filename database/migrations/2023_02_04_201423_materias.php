<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Materias',function(Blueprint $table){
            $table->increments('idmateria');
            $table->string('nombre',40);
            $table->string('codigo',40);
            $table->dateTime('fechaHoraInicial',0);
            $table->dateTime('fechaHoraFinal',0);
            $table->string('limite');
            

            $table->integer('idprofesor')->unsigned();
            $table->foreign('idprofesor')->references('idprofesor')->on('profesores');

            $table->rememberToken();
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
        Schema::drop('Materias');
    }
}
