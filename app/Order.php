<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Family;

class Order extends Model
{

    public function families(){
        return $this->hasMany(Family::class);
    }
}
