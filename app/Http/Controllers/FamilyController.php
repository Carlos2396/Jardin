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

        return redirect('/familias/crear');        
    }
}
