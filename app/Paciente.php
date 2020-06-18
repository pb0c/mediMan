<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paciente extends Model
{
    public function actividad()
    {
        return $this->belongsTo(Actividad::class);
    }

    public function deporte()
    {
        return $this->belongsTo(Deporte::class);
    }
    

    protected $date = [
        'nacimiento'
    ];
    
    //formato fecha
    protected $casts = [
        'nacimiento' => 'datetime:d-m-Y',
    ];

<<<<<<< HEAD
    /*Consulta
    public function paciente()
    {
        return $this->belongsTo(Paciente::class); //
    }
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    protected $date = [
        'fecha'
    ];
    
    //formato fecha
    protected $casts = [
        'fecha' => 'datetime:d-m-Y',
    ];

    
    Schema::create('consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('hora');
            $table->date('fecha');
            $table->integer('box');
            $table->integer('numSesion');
            //FK
            $table->unsignedBigInteger('paciente_id'); //relación con paciente
            $table->foreign('paciente_id')->references('id')->on('paciente'); //FK desde paciente
            $table->unsignedBigInteger('empleado_id'); //relación con empleado
            $table->foreign('empleado_id')->references('id')->on('empleado');
            $table->timestamps();
        }); */

=======
>>>>>>> d7f6f0d8eaefb3bc967a072729cc375a4502cc13
}
