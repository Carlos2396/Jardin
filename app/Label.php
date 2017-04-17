<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specie;

class Label extends Model
{
    public function species(){
        return $this->belongsToMany(Specie::class);
    }
}
