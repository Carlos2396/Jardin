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
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class SpecieController extends Controller
{
    public function index(){
        $classes = Clase::all()->sortBy('name');
        $orders = Order::all()->sortBy('name');
        $families = Family::all()->sortBy('name');
        $genders = Gender::all()->sortBy('name');
        $species = Specie::all()->sortBy('name');
        $allColors = Color::all()->sortBy('name');
        $allLabels = Label::all()->sortBy('name');
        session()->flash('message', 'Especie creada correctamente');

        $colors = collect();
        //Only get colors asociated with at least one specie
        foreach($allColors as $color){
            if(!$color->species->isEmpty())
                $colors->push($color);
        }

        //Only get labels asociated with at least one specie
        $labels = collect();
        foreach($allLabels as $label){
            if(!$label->species->isEmpty())
                $labels->push($label);
        }
        
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
        $colors = Color::all()->sortBy('name');
        $labels = Label::all()->sortBy('name');
        $species = Specie::all()->sortBy('name');

        if(request('class'))
            $query = "select s.id from species s, genders g, families f, orders o, clases c where c.id =".request('class')." and c.id = o.clase_id and o.id = f.order_id and f.id = g.family_id and g.id = s.gender_id";
        else
            if(request('order'))
                $query = "select s.id from species s, genders g, families f, orders o where o.id =" . request('order') . " and o.id = f.order_id and f.id = g.family_id and g.id = s.gender_id";
            else
                if(request('family'))
                    $query = "select s.id from species s, genders g, families f where f.id =" . request('family') . " and f.id = g.family_id and g.id = s.gender_id";
                else
                    if(request('gender'))
                        $query = "select s.id from species s, genders g where g.id =" . request('gender') . " and g.id = s.gender_id";
                    else
                        $query = "select s.id from species s";

        //Labels
        $counter = 0;
        $labelquery = "";
        foreach($labels as $label){
            if( request('label_'.$label->id) ){
                $counter++;
                if($counter > 1)
                    $labelquery = $labelquery." or l.id = ".$label->id;
                else
                    $labelquery = "(l.id = ".$label->id;   
            }  
        }

        if($counter>0)
            $query = "select s2.id from species s2, labels l, label_specie ls where ".$labelquery.") and ls.label_id = l.id and s2.id = ls.specie_id and s2.id IN( ".$query.")";

        //Colors
        $counter = 0;
        $colorquery = "";
        foreach($colors as $color){
            if( request('color_'.$color->id) ){
                $counter++;

                if($counter > 1)
                    $colorquery = $colorquery." or c.id = ".$color->id;
                else
                    $colorquery = "(c.id = ".$color->id;   
            }  
        }

        if($counter>0)
            $query = "select s3.id from species s3, colors c, color_specie cs where ".$colorquery.") and cs.color_id = c.id and s3.id = cs.specie_id and s3.id IN(".$query.")";

        $IDs = DB::select($query);
        $species = collect();
        foreach($IDs as $id)
            if(!$species->contains($specie = Specie::find($id->id)))
                $species->push($specie);

        $view = view('specie.list', compact('species'));
        return $view->render();
    }

    public function search(){
        $IDs = DB::select("select s.id from species s, genders g where g.name like '%".request('searchInput')."%' and s.gender_id = g.id UNION select s.id from species s where s.name like '%".request('searchInput')."%'");
        $species = collect();
        foreach($IDs as $id)
            if(!$species->contains($specie = Specie::find($id->id)))
                $species->push($specie);

        $view = view('specie.list', compact('species'));
        return $view->render();
    }
}