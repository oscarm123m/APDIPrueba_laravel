<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AsignacionMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AsignacionMaterias',function(Blueprint $table){
            $table->increments('idasignacionmateria');
            
            

            $table->integer('idprofesor')->unsigned();
            $table->foreign('idprofesor')->references('idprofesor')->on('profesores');

            $table->integer('idestudiante')->unsigned();
            $table->foreign('idestudiante')->references('idestudiante')->on('estudiantes');

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
        Schema::drop('AsignacionMaterias');
    }
}
