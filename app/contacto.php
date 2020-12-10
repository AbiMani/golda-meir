<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    protected $table=  'contactos';

    protected $primaryKey= 'idContacto';

    public $timestamps=true;

    protected $fillable= [
    	'nomContac',
    	'parentescoContacto',
    	'telContacto',
        'celContacto',
        'estudiante_id'

    ];
}
