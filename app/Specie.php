<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gender;
use App\Label;
use App\Color;
use App\Name;
use App\Image;

class Specie extends Model
{
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
        return $this->belongsToMany(Color::class);
    }
}
