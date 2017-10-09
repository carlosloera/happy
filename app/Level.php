<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //

    public function usershd()
    {
    	return $this->hasMany(UserHD::class,'niveles_id');
    }
}
