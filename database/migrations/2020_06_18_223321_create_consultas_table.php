<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('hora');
            $table->date('fecha');
            $table->integer('box');
            $table->integer('numSesion');
            //FK
            $table->unsignedBigInteger('paciente_id'); //relación con paciente
            $table->foreign('paciente_id')->references('id')->on('pacientes'); //FK desde paciente
            $table->unsignedBigInteger('empleado_id'); //relación con empleado
            $table->foreign('empleado_id')->references('id')->on('empleados');
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
        Schema::dropIfExists('consultas');
    }
}
