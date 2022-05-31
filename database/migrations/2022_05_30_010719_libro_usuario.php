<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LibroUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LibroUsuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->unsigned()->nullable();
            $table->integer('idLibro')->unsigned()->nullable();
            $table->integer('idMetodoPago')->unsigned()->nullable();
           
            $table->nullableTimestamps();
            $table->SoftDeletes();
            $table->string('CreatorUserName', 250)->nullable();
            $table->string('CreatorFullUserName', 250)->nullable();
            $table->string('CreatorIP', 250)->nullable();
            $table->string('UpdaterUserName', 250)->nullable();
            $table->string('UpdaterFullUserName', 250)->nullable();
            $table->string('UpdaterIP', 250)->nullable();
            $table->string('DeleterUserName', 250)->nullable();
            $table->string('DeleterFullUserName', 250)->nullable();
            $table->string('DeleterIP', 250)->nullable();
            
            $table->foreign('idUsuario')->references('id')->on ('Usuario');
            $table->foreign('idLibro')->references('id')->on ('Libro');
            $table->foreign('idMetodoPago')->references('id')->on ('MetodoPago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LibroUsuario'); 
    }
}
