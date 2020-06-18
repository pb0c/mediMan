<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public function paciente()
    {
<<<<<<< HEAD
        return $this->belongsTo(Paciente::class); //
=======
        return $this->belongsTo(Paciente::class);
>>>>>>> d7f6f0d8eaefb3bc967a072729cc375a4502cc13
    }
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
<<<<<<< HEAD

    protected $date = [
        'fecha'
    ];
    
    //formato fecha
    protected $casts = [
        'fecha' => 'datetime:d-m-Y',
    ];
=======
>>>>>>> d7f6f0d8eaefb3bc967a072729cc375a4502cc13
}
