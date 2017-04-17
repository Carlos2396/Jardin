<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specie;

class Image extends Model
{
    public function specie(){
        return $this->belongsTo(Specie::class);
    }    
}
