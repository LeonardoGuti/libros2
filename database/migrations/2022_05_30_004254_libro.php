<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Libro', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPais')->unsigned()->nullable();
            $table->string('titulo')->nullable();
            $table->string('numeroPaginas',255)->nullable();
            $table->string('editorial',255)->nullable();
            $table->string('edicion',255)->nullable();
            $table->date('fechaPublicacion')->nullable();
            $table->integer('numeroDeCapitulos')->nullable();
            $table->integer('precio')->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('provedor',255)->nullable();
            $table->string('descuento',255)->nullable();
            $table->integer('idTipoLibro')->unsigned()->nullable();

           
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
            $table->foreign('idTipoLibro')->references('id')->on ('TipoLibro');
            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Libro'); 
    }
}
