<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Label;
use App\Specie;
use App\LabelSpecie;

class LabelController extends Controller
{
    public function store(){
        $this->validate(request(), [
            'name' => 'required'
        ]);

        $label = Label::create([
            'name' => request('name'),
        ]);

        for($i=0; $i<= Specie::all()->count(); $i++){
            if(request($i)){
                LabelSpecie::create([
                    'label_id' => $label->id,
                    'specie_id' => $i
                ]);
            }
        }

        return redirect('/crear');
    }

     public function edit(Label $label){
        $species = Specie::all();
        return view('label.edit', compact('species', 'label'));
    }

    public function update(Label $label){
         $this->validate(request(), [
            'name' => 'required'
        ]);
        $label->name= request('name');
        
        for($i=0; $i<= Specie::all()->count(); $i++){
            $labelSpecie = LabelSpecie::where('specie_id', $i)->where('label_id', $label->id)->first();
            if(request($i)){
                if($labelSpecie==null){
                    LabelSpecie::create([
                        'label_id' => $label->id,
                        'specie_id' => $i
                    ]);
                }
            }
            else{
                if($labelSpecie!=null){
                   $labelSpecie->delete();      
                }
            }
        }
        return redirect('/editar');   
    }
}
