<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use App\Order;
use App\Family;
use App\Gender;
use App\Specie;
use App\Color;
use App\Label;

class AdminController extends Controller
{
    function create() {
        $classes = Clase::all()->sortBy('name');
        $orders = Order::all()->sortBy('name');
        $families = Family::all()->sortBy('name');
        $genders = Gender::all()->sortBy('name');
        $species = Specie::all()->sortBy('name');
        $colors = Color::all()->sortBy('name');

        return view('admin.create', compact('classes' ,'orders', 'families', 'genders', 'species', 'colors'));
    }

    function edit(){
        $classes = Clase::all()->sortBy('name');
        $orders = Order::all()->sortBy('name');
        $families = Family::all()->sortBy('name');
        $genders = Gender::all()->sortBy('name');
        $species = Specie::all()->sortBy('name');
        $colors = Color::all()->sortBy('name');
        $labels = Label::all()->sortBy('name');

        return view('admin.edit', compact('classes' ,'orders', 'families', 'genders', 'species', 'colors', 'labels'));
    }

    function logout(){
        auth()->logout();

        return redirect('/');
    }
}
