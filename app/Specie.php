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
        return $this->belongsToMany(Color::class);
    }

    public function deleteSpecie(){
        $labelSpecies=LabelSpecie::all();
        $colorSpecies=ColorSpecie::all();
        $images=Image::all();
        $names=Name::all();
        foreach($labelSpecies as $labelSpecie){
            if($labelSpecie->specie_id==$this->id){
                $labelSpecie->delete();
            }
        }
        foreach($colorSpecies as $colorSpecie){
            if($colorSpecie->specie_id==$this->id){
                $colorSpecie->delete();
            }
        }
        foreach($images as $image){
            if($image->specie_id==$this->id){
                $image->delete();
            }
        }
        foreach($names as $name){
            if($name->specie_id==$this->id){
                $name->delete();
            }
        }
    }
}
