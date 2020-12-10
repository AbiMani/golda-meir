<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mental extends Model
{
    protected $table=  'mental';

    protected $primaryKey= 'idMental';

    public $timestamps=true;

    protected $fillable= [
    	'nomMedHipera',
    	'desProbAprendizaje',
    	'desProbMedicoG',
        'estudiante_id'

    ];
}
