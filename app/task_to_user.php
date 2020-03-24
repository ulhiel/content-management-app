<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task_to_user extends Model
{
    //

    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function users(){
        return $this->hasMany('App\User');
    }
}
