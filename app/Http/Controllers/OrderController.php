<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Clase;

class OrderController extends Controller
{
    public function create(){

        $orders = Order::all();
        return view('order.create');
    }

     public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        Order::create([
            'name' => request('name'),
            'description'=> request('description'),
            'class_id' => request('class')
        ]);

        return redirect('/crear');        
    }

     public function edit(Order $order){
        $classes = Clase::all();
        return view('order.edit', compact('classes', 'order'));
    }

    public function update(Order $order){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);
        $order->name=request('name');
        $order->description= request('description');
        $order->class_id = request('class');
        $order->save();
        return redirect('/editar');   
    }

    public function deleteOrder(Order $order){
        $order->delete();
        return redirect('/editar');
    }
}
