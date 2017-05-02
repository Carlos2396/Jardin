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
            'clase_id' => request('class')
        ]);
        session()->flash('message', 'Orden creado correctamente');
        return redirect('/crear');        
    }

     public function edit(Order $order){
        $clases = Clase::all();
        return view('order.edit', compact('clases', 'order'));
    }

    public function update(Order $order){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);
        $order->name=request('name');
        $order->description= request('description');
        $order->clase_id = request('clase');
        $order->save();
        session()->flash('message', 'Orden guardado correctamente');
        return redirect('/editar');   
    }

    public function deleteOrder(Order $order){
        $order->delete();
        return redirect('/editar');
    }

    public function options(){
        if((int)request('class') > 0)
            $elements = Clase::find((int)request('class'))->orders;
        else
            $elements = Order::all();

        $elements = $elements->sortBy('name');
        return view('layouts.select_content', compact('elements'))->render();
    }
}
