<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class madreEstudiante extends Model
{
    protected $table=  'madre_estudiantes';

    protected $primaryKey= 'idMadre';

    public $timestamps=true;

    protected $fillable= [
    	'nombreMadre',
    	'apellidoMadre',
    	'numeroDuiMadre',
        'profesionMadre',
    	'lugarTrabajoMadre',
    	'telefonoMadre',
    	'correoMadre',
    	'direccionMadre',
        'estudiante_id'

    ];
}
