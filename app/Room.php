<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function photos(){
        return $this->morphToMany('App\Photo','photoable');
    }
}
