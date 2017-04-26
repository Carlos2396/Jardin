<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;

class ColorController extends Controller
{
     public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'color' => 'required'
        ]);

        Color::create([
            'name' => request('name'),
            'rgb' => request('color')
        ]);

        return redirect('/crear');
     }

     public function edit(Color $color){
         return view('color.edit', compact('color'));
     }

     public function update(Color $color){
         $this->validate(request(), [
            'name'=>'required',
            'color' => 'required'
        ]);
        $color->name=request('name');
        $color->rgb=request('color');
        $color->save();
        return redirect('/editar');   
    }

}
