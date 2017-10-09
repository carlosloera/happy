<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHD extends Model
{
    //

    public function level()
    {
    	return $this->belongsTo(Level::class,'id');
    }
}
