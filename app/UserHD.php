<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHD extends Model
{
    //

    protected $fillable=[
	    	'username',
	        'password',
            'correo',
            'apellidoM',
            'apellidoP',
            'fecha_nacimiento',
            'sexo',
            'direccion',
            'codigo_postal',
            'celular',
            'licencia',
            'nombre',
    ];

    public function level()
    {
    	return $this->belongsTo(Level::class,'id');
    }
}
