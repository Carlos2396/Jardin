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
}
