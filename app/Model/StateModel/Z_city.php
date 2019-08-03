<?php

namespace App\Model\StateModel;

use Illuminate\Database\Eloquent\Model;

class Z_city extends Model
{
    function toState(){
        return $this->belongsToMany('App\Model\StateModel\Z_state','z_attr_city_states','state','city');

    }
    function toZone(){
        return $this->belongsToMany('App\Model\StateModel\Z_zone','z_attr_city_zones','city','zone');


    }
}
