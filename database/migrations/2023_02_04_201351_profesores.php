<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profesores',function(Blueprint $table){
            $table->increments('idprofesor');
            $table->string('nombrecompleto',100);
            $table->string('documento',40);
            $table->string('celular',10);
            $table->string('direccion',10);

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
        Schema::drop('Profesores');
    }
}
