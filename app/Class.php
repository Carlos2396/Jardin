<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gender;


class Class extends Model
{
    public function orders(){
        return $this->hasMany(Gender::class);
    }
}
