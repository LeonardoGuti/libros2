<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPais')->unsigned()->nullable();
            $table->integer('idSexo')->unsigned()->nullable();
            $table->integer('idSucursal')->unsigned()->nullable();
            $table->string('nombre',255)->nullable();
            $table->string('Ap_paterno',255)->nullable();
            $table->string('Ap_materno',255)->nullable();
            $table->string('contraseña',255)->nullable();
            $table->string('correo',255)->nullable();
            $table->integer('carnet')->nullable();
            $table->integer('celular')->nullable();
            $table->string('direcion',255)->nullable();
            $table->string('nit',255)->nullable();
            $table->string('nombreDeFactura',255)->nullable();
            $table->integer('idRol')->unsigned()->nullable();

           
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
            
            $table->foreign('idPais')->references('id')->on ('Pais');
            $table->foreign('idSexo')->references('id')->on ('Sexo');
            $table->foreign('idRol')->references('id')->on ('Rol');
            $table->foreign('idSucursal')->references('id')->on ('Sucursal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario'); 
    }
}
