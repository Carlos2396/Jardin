<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specie;

class Name extends Model
{
    protected $fillable= ['name', 'specie_id'];

    public function specie(){
        return $this->belongsTo(Specie::class);
    }    
}
