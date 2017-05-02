<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;


class Clase extends Model
{
    protected $fillable= ['name', 'description'];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function entityCount(){
        $x=1;
        $orders=$this->orders;
        foreach($orders as $order){
            $x+=$order->entityCount();
            $x++;
        }
        return $x;
    }
}
