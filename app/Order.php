<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classs;
use App\Family;

class Order extends Model
{
	protected $fillable= ['name', 'description', 'order_id'];

        public function classs(){
        return $this->belongsTo(Classs::class);
    }

    public function families(){
        return $this->hasMany(Family::class);
    }
}
