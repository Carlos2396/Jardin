<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Family;

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
        return redirect('/editar');   
    }

    public function deleteFamily(Family $family){
        
        $family->delete();
        return redirect('/editar');
    }
}
