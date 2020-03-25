<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //
    public function post(){
        return $this->belongsTo('App\Post');
    }

    public function task_to_user(){
        return $this->belongsTo('App\Task_to_user');
    }
}
