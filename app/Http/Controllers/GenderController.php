<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\Family;

class GenderController extends Controller
{
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
        session()->flash('message', 'Genero creado correctamente');
        return redirect('/crear');        
    }

     public function edit(Gender $gender){
        $families = Family::all();
        return view('gender.edit', compact('families', 'gender'));
    }

    public function update(Gender $gender){
         $this->validate(request(), [
            'description' => 'required',
            'water_care' => 'required',
            'light_care' => 'required',
            'temp_care' => 'required',
            'name' => 'required',
        ]);
        $gender->name=request('name');
        $gender->description= request('description');
        $gender->water_care = request('water_care');
        $gender->light_care = request('light_care');
        $gender->temp_care = request('temp_care');
        $gender->family_id = request('family');
        $gender->save();
        session()->flash('message', 'Genero guardado correctamente');
        return redirect('/editar');   
    }

    public function deleteGender(Gender $gender){
        $gender->delete();
        return redirect('/editar');
    }
}
