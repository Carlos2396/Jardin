<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specie;
use App\Family;

class Gender extends Model
{
    public function family(){
        return $this->belongsTo(Family::class);
    }

    public function species(){
        return $this->hasMany(Specie::class);
    }
}
