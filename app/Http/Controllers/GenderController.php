<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\Family;

class GenderController extends Controller
{
    public function create(){

        $families = Family::all();
        return view('gender.create', compact('families'));
    }

     public function store(){
        $this->validate(request(), [
            'description' => 'required',
            'water_care' => 'required',
            'light_care' => 'required',
            'temp_care' => 'required',
            'name' => 'required',
        ]);

        Gender::create([
            'description'=> request('description'),
            'water_care' => request('water_care'),
            'light_care' => request('light_care'),
            'temp_care' => request('temp_care'),
            'name' => request('name'),
            'family_id' => request('family')
        ]);

        return redirect('/crear');        
    }
}
