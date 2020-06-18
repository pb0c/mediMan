<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
