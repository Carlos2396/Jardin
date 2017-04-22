<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function create(){

        $clases = Clase::all();
        return view('class.create');
    }

     public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        Order::create([
            'name' => request('name'),
            'description'=> request('description'),
            'clase_id' => request('clase')
        ]);

        return redirect('/clases/crear');        
    }
}
