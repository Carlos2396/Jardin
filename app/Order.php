<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Class;
use App\Family;

class Order extends Model
{
    public function class(){
        return $this->belongsTo(Class::class);
    }

    public function families(){
        return $this->hasMany(Family::class);
    }
}
