<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gender;
use App\Label;
use App\Color;
use App\Name;
use App\Image;
use App\LabelSpecie;
use App\ColorSpecie;

class Specie extends Model
{
    protected $fillable= ['name', 'description', 'especial_care', 'price', 'gender_id'];

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function names(){
        return $this->hasMany(Name::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function labels(){
        return $this->belongsToMany(Label::class);
    }

    public function colors(){
        return $this->belongsToMany(Color::class)->withPivot('quantity');
    }

}
