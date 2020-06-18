<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
<<<<<<< HEAD
    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }
=======
>>>>>>> d7f6f0d8eaefb3bc967a072729cc375a4502cc13
}
