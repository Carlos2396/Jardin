<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specie;

class SpecieController extends Controller
{
    public function index(){
        return view('specie.index');
    }

    public function show(Specie $specie){
        return view('specie.show', compact('specie'));
    }
}
