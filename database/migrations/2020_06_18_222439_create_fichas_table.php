<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medico');
            $table->string('tratamiento');
            $table->string('medicamento');
            $table->string('diagnostico');
            $table->string('antMorbido');
            //FK
            $table->unsignedBigInteger('paciente_id'); //relación con paciente
            $table->foreign('paciente_id')->references('id')->on('pacientes'); //FK desde paciente
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
        Schema::dropIfExists('fichas');
    }
}
