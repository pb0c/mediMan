<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) { //creación tabla actividads
            $table->bigIncrements('id');
            $table->string('actNombre');
            $table->timestamps();
            
        });

        Schema::create('deportes', function (Blueprint $table) { //creación tabla deportes
            $table->bigIncrements('id');
            $table->string('depNombre');
            $table->timestamps();
        });
    
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rut');
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM')->nullable();
            $table->date('nacimiento');
            $table->integer('edad');
            $table->boolean('sexo');
            $table->string('telefono');
            $table->string('prevision');
            $table->string('calle');
            $table->integer('numero');
            $table->string('dpto')->nullable();
            $table->string('comuna');
            //FK's
            $table->unsignedBigInteger('actividad_id')->nullable(); //relación con actividad
            $table->foreign('actividad_id')->references('id')->on('actividads'); //Fk desde actividad
            $table->unsignedBigInteger('deporte_id')->nullable(); //relación con deporte
            $table->foreign('deporte_id')->references('id')->on('deportes'); //FK desde deporte

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
        Schema::dropIfExists('actividads');
        Schema::dropIfExists('deportes');
        Schema::dropIfExists('pacientes');
    }
}
