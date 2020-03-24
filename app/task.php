<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //
    public function rubrik(){
        return $this->belongsTo('App\Rubrik');
    }

    public function task_to_user(){
        return $this->belongsTo('App\Task_to_user');
    }
}
