<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class padreEstudiante extends Model
{
    protected $table=  'padre_estudiantes';

    protected $primaryKey= 'idPadre';

    public $timestamps=true;

    protected $fillable= [
    	'nombrePadre',
    	'apellidoPadre',
    	'numeroDuiPadre',
        'profesionPadre',
    	'lugarTrabajoPadre',
    	'telefonoPadre',
    	'correoPadre',
    	'direccionPadre',
        'estudiante_id'

    ];
}
