<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gender;


class Clase extends Model
{
    protected $table = 'classes';
    protected $fillable= ['name', 'description'];

    public function orders(){
        return $this->hasMany(Gender::class);
    }
}
