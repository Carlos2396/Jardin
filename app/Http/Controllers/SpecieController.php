<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use App\Order;
use App\Family;
use App\Gender;
use App\Specie;
use App\Name;
use App\Color;
use App\Image;
use App\ColorSpecie;
use App\Label;


class SpecieController extends Controller
{
    public function index(){
        $classes = Clase::all()->sortBy('name');
        $orders = Order::all()->sortBy('name');
        $families = Family::all()->sortBy('name');
        $genders = Gender::all()->sortBy('name');
        $species = Specie::all()->sortBy('name');
        $colors = Color::all()->sortBy('name');
        $labels = Label::all()->sortBy('name');
        session()->flash('message', 'Especie creada correctamente');
        return view('specie.index', compact('classes' ,'orders', 'families', 'genders', 'species', 'colors', 'labels'));
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
            if($i==0)
                $imageName=$specie->gender->name.$specie->name.'Principal';
            else
                $imageName=$specie->gender->name.$specie->name.$i;
            $request->move(public_path("img\species"), $imageName.'.'.$ext);

            Image::create([
                'name'=>$imageName,
                'path'=>public_path("img\species"),
                'specie_id'=>$specie->id,
            ]);
        }

        return redirect('/crear');
     }

     public function edit(Specie $specie){
        $genders = Gender::all();
        $colors = Color::all();
        $colorSpecie = ColorSpecie::all();
        $names = Name::where('specie_id','=',$specie->id)->get();
        return view('specie.edit', compact('genders', 'specie', 'names', 'colors', 'colorSpecie'));
    }

    public function update(Specie $specie){
         $this->validate(request(), [
            'description' => 'required',
            'especial_care' => 'required',
            'price' => 'required',
            'name' => 'required',
        ]);
        $specie->name=request('name');
        $specie->description= request('description');
        $specie->especial_care = request('especial_care');
        $specie->price = request('price');
        $specie->gender_id= request('gender');
        $specie->save();
        session()->flash('message', 'Especie guardada correctamente');
        return redirect('/editar');   
    }

    public function deleteSpecie(Specie $specie){
        $specie->delete();
        return redirect('/editar');
    }

    public function filter(){
        $classes = Clase::all()->sortBy('name');
        $orders = Order::all()->sortBy('name');
        $families = Family::all()->sortBy('name');
        $genders = Gender::all()->sortBy('name');
        $colors = Color::all()->sortBy('name');
        $labels = Label::all()->sortBy('name');
        $species = Specie::all();

        if(request('gender') != 0){
            $species = $species->where('gender_id', request('gender'));
        }

        $array = array();
        $counter = 0;

        //Etiquetas
        foreach($labels as $label){
            if( request('label_'.$label->id) ){
                $counter++;
                foreach($label->species as $specie){
                    if(!in_array($specie->id, $array))
                        array_push($array, $specie->id);
                }
            }  
        }
        if($counter > 0)
            $species = $species->whereIn('id', $array);

        //Colores
        $array = array();
        $counter = 0;
        foreach($colors as $color){
            if( request('color_'.$color->id) ){
                $counter++;
                foreach($color->species as $specie){
                    if(!in_array($specie->id, $array))
                        array_push($array, $specie->id);
                }
            }  
        }
        if($counter > 0)
            $species = $species->whereIn('id', $array);

        return view('specie.index', compact('classes' ,'orders', 'families', 'genders', 'species', 'colors', 'labels'));
    }
}
