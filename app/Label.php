<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specie;

class Label extends Model
{
    protected $fillable= ['name'];

    public function species(){
        return $this->belongsToMany(Specie::class);
    }

    public function entityCount(){
        $x=1;
        return $x;
    }
}
