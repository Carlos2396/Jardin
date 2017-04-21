<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gender;


class Classs extends Model
{
    protected $table = 'classes';

    public function orders(){
        return $this->hasMany(Gender::class);
    }
}
