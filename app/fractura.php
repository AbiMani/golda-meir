<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fractura extends Model
{
    protected $table=  'fracturas';

    protected $primaryKey= 'idFractura';

    public $timestamps=true;

    protected $fillable= [
    	'areaAfectada',
    	'secuelaFrac',
    	'txFrac',
        'estudiante_id'

    ];
}
