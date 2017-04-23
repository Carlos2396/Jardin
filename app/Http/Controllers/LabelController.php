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
}
