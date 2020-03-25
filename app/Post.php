<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['post_date','rubrik_id','title'];
    protected $attributes = ['is_posted' => false];
    
    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function rubrik(){
        return $this->belongsTo('App\Rubrik');
    }
}
