<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rubrik extends Model
{
    protected $fillable = ['name','deskripsi'];

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
