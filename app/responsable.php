<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class responsable extends Model
{
    protected $table=  'responsables';

    protected $primaryKey= 'idresponsable';

    public $timestamps=true;

    protected $fillable= [
    	'nombreRes',
    	'apellidoRes',
    	'numeroDuiRes',
        'profesionRes',
    	'lugarTrabajoRes',
    	'telefonoRes',
    	'correoRes',
    	'direccionRes',
        'estudiante_id'

    ];
}
