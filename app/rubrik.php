<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rubrik extends Model
{
    //

    public function tasks(){
        return $this->hasMany('App\task');
    }
}
