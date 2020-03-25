<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //

    public function project(){
        return view('projects.index');
    }
}
