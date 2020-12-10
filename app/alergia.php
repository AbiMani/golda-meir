<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alergia extends Model
{
    protected $table=  'alergias';

    protected $primaryKey= 'idAlergia';

    public $timestamps=true;

    protected $fillable= [
    	'mediAlergia',
    	'descripcionAlergia',
    	'otraAlergia',
        'descripcionOtra',
        'estudiante_id'

    ];
}
