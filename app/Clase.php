<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gender;


class Clase extends Model
{
    protected $fillable= ['name', 'description'];

    public function orders(){
        return $this->hasMany(Order::class);
    }

}
