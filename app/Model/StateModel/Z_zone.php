<?php

namespace App\Model\StateModel;

use Illuminate\Database\Eloquent\Model;

class Z_zone extends Model
{
    function toCity(){
        return $this->belongsToMany('App\Model\StateModel\Z_city','z_attr_city_zones','zone','city');

    }
}
