<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliver extends Model
{
    //
    public function usershd()
    {
    	return $this->hasMany(UserHD::class,'envios_id');
    }
}
