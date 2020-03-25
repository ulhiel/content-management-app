<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rubrik;

use function Ramsey\Uuid\v1;

class RubrikController extends Controller
{
    

    public function index(){
        $rubriks = \App\rubrik::all();

        return view('rubrik.index', compact('rubriks'));
    }

    public function create(){
        return view('rubrik.create');
    }

    public function store(Request $request){
        $rubrik = \App\Rubrik::create([
            'name' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/rubrik')->with(['created' => 'Rubrik baru berhasil dibuat']);
    }

    public function show($id){
        $target = \App\rubrik::find($id);
        return view('rubrik.show',compact('target'));
    }

    public function storePost(Request $request){
        return $request;
    }
}
