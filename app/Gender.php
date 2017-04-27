<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specie;
use App\Family;

class Gender extends Model
{
    protected $fillable= ['name', 'description', 'water_care', 'light_care', 'temp_care', 'family_id'];

    public function family(){
        return $this->belongsTo(Family::class);
    }

    public function species(){
        return $this->hasMany(Specie::class);
    }

}
