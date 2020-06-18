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
<<<<<<< HEAD
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
=======
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut');
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
>>>>>>> d7f6f0d8eaefb3bc967a072729cc375a4502cc13
            $table->date('nacimiento');
            $table->integer('edad');
            $table->boolean('sexo');
            $table->string('telefono');
            $table->string('prevision');
            $table->string('calle');
            $table->integer('numero');
<<<<<<< HEAD
            $table->string('dpto')->nullable();
            $table->string('comuna');
            //FK's
            $table->unsignedBigInteger('actividad_id'); //relación con actividad
            $table->foreign('actividad_id')->references('id')->on('actividads'); //Fk desde actividad
            $table->unsignedBigInteger('deporte_id'); //relación con deporte
            $table->foreign('deporte_id')->references('id')->on('deportes'); //FK desde deporte

            $table->timestamps();
        });

    }


=======
            $table->string('dpto');
            $table->string('comuna');
            $table->unsignedInteger('actividad_id'); //relación con actividad
            $table->unsignedInteger('deporte_id'); //relación con categoría
            $table->timestamps();
        });
    }

    
>>>>>>> d7f6f0d8eaefb3bc967a072729cc375a4502cc13

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::dropIfExists('actividads');
        Schema::dropIfExists('deportes');
=======
>>>>>>> d7f6f0d8eaefb3bc967a072729cc375a4502cc13
        Schema::dropIfExists('pacientes');
    }
}
