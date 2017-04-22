<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;

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

        Clase::create([
            'name' => request('name'),
            'description'=> request('description'),
        ]);

        return redirect('/crear');        
    }
}
