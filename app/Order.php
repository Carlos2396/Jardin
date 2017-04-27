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

    
}
