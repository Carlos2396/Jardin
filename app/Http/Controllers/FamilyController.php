<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Family;
use App\Clase;

class FamilyController extends Controller
{
    public function create(){
        $orders = Order::all();
        return view('family.create', compact('orders'));
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        Family::create([
            'name' => request('name'),
            'description'=> request('description'),
            'order_id' => request('order')
        ]);
        session()->flash('message', 'Familia creada correctamente'); 
        return redirect('/crear');        
    }

     public function edit(Family $family){
        $orders = Order::all();
        return view('family.edit', compact('orders', 'family'));
    }

    public function update(Family $family){
         $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
        ]);
        $family->name=request('name');
        $family->description=request('description');
        $family->order_id=request('order');
        $family->save();
        session()->flash('message', 'Familia guardada correctamente');
        return redirect('/editar');   
    }

    public function deleteFamily(Family $family){
        
        $family->delete();
        return redirect('/editar');
    }

    public function options(){
        if( (int)request('order') > 0)
            $elements = Order::find((int)request('order'))->families;
        else{
            if( (int)request('class') > 0){
                $class = Clase::find((int)request('class'));
                $elements = collect();
                foreach($class->orders as $order)
                    foreach($order->families as $family)
                        if(!$elements->contains($family))
                            $elements->push($family);
            }
            else
                $elements = Family::all();
        }
    
        $elements = $elements->sortBy('name');
        return view('layouts.select_content', compact('elements'))->render();
    }
}
