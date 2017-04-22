<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specie;

class Image extends Model
{
    protected $fillable= ['name', 'path', 'specie_id'];

    public function specie(){
        return $this->belongsTo(Specie::class);
    }    
}
