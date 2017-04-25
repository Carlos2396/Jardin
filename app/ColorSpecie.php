<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorSpecie extends Model
{
    protected $fillable = ['color_id', 'specie_id', 'quantity'];
    protected $table = 'color_specie';
}
