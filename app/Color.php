<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specie;

class Color extends Model
{
    protected $fillable= ['name', 'rgb'];

    public function species(){
        return $this->belongsToMany(Specie::class)->withPivot('quantity');
    }

    public function entityCount(){
        $x=1;
        return $x;
    }
}
