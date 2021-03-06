<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gender;
use App\Order;

class Family extends Model
{
    protected $fillable= ['name', 'description', 'order_id'];
    
    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function genders(){
        return $this->hasMany(Gender::class);
    }

    public function entityCount(){
        $x=1;
        $genders=$this->genders;
        foreach($genders as $gender){
            $x+=$gender->entityCount();
            $x++;
        }
        return $x;
    }
}
