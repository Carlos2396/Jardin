<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clase;
use App\Family;

class Order extends Model
{
	protected $fillable= ['name', 'description', 'clase_id'];

    public function clase(){
        return $this->belongsTo(Clase::class);
    }

    public function families(){
        return $this->hasMany(Family::class);
    }

    public function entityCount(){
        $x=1;
        $families=$this->families;
        foreach($families as $family){
            $x+=$family->entityCount();
            $x++;
        }
        return $x;
    }
}
