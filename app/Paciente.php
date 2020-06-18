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
        'nacimiento' => 'datetime:d-m-Y'
    ];

}
