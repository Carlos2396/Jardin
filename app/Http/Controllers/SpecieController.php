<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specie;
use App\Genero;
use App\Name;
use App\Color;
use App\Image;
use App\ColorSpecie;


class SpecieController extends Controller
{
    public function index(){
        return view('specie.index');
    }

    public function show(Specie $specie){
        return view('specie.show', compact('specie'));
    }

    public function store(){
        $nameCount=request('nameCount');
        $colorCount=request('colorCount');
        $imageCount=request('imageCount');
        $gender=request('gender');
        
        $this->validate(request(), [
            'name' => 'required',
            'price' => 'required',
            'gender'=>'required',
            'description'=>'required',
            'especial_care'=>'required',
        ]);

        for($i=0; $i<$nameCount; $i++){
            $this->validate(request(), [
                'coloquial_'.$i=> 'required'
            ]);
        }

        for($i=0; $i<$colorCount; $i++){
            $this->validate(request(), [
                'color_'.$i=> 'required'
            ]);
        }

        for($i=0; $i<$imageCount; $i++){
            //Aqui va lo de validar imagenes
            $validator=$this->validate(request(), [
                'img'.$i=> 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);
        }

        $specie=Specie::create([
            'name' => request('name'),
            'price' => request('price'),
            'gender_id' => request('gender'),
            'description' => request('description'),
            'especial_care'=>request('especial_care'),
        ]);

        for($i=0; $i<$nameCount; $i++){
            Name::create([
                'name'=>request('coloquial_'.$i),
                'specie_id'=>$specie->id,
            ]);
        }

        for($i=0; $i<$colorCount; $i++){
            ColorSpecie::create([
                'color_id'=>request('color_'.$i),
                'specie_id'=>$specie->id,
                'quantity'=>request('quantity_'.$i),
            ]);
        }

        for($i=0; $i<$imageCount; $i++){
            //aqui va lo de crear imagen
            $request = request('img'.$i);
            $ext = $request->getClientOriginalExtension();
            $imageName=$specie->gender->name.$specie->name.'_'.$i;
            
            $request->move(public_path("img\species"), $imageName.'.'.$ext);

            Image::create([
                'name'=>$imageName,
                'path'=>public_path("img\species"),
                'specie_id'=>$specie->id,
            ]);
        }

        return redirect('/crear');
     }
}
