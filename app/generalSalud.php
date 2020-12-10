<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class generalSalud extends Model
{
    protected $table=  'general_salud';

    protected $primaryKey= 'idGeneral';

    public $timestamps=true;

    protected $fillable= [
    	'tipoSangre',
    	'peso',
    	'talla',
        'estudiante_id'

    ];
}
