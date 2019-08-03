<?php

namespace App\Model\StateModel;

use Illuminate\Database\Eloquent\Model;

class Z_state extends Model
{
    function toCity(){
        return $this->belongsToMany('App\Model\StateModel\Z_city','z_attr_city_states','city','state');
    }

}
