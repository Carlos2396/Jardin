<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        Family::create([
            'name' => request('name'),
            'description'=> request('description'),
            'order_id' => request('order')
        ]);

        return redirect('/orders/crear');        
    }
}
