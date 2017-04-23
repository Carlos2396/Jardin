<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabelSpecie extends Model
{
    protected $fillable = ['label_id', 'specie_id'];
    protected $table = 'label_specie';
}
