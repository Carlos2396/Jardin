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
}
