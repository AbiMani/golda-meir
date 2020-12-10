<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enfermedad extends Model
{
    protected $table=  'enfermedades';

    protected $primaryKey= 'idEnf';

    public $timestamps=true;

    protected $fillable= [
    	'nomEnf',
    	'descripcionEnf',
    	'txEnf',
        'nomMedico',
    	'telMedico',
        'estudiante_id'

    ];
}
