<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Orders')->insert([
        	'name'=>'Rosales',
            'description'=>'Es uno de los órdenes más importantes por la variedad y diversidad de los individuos que agrupa. Está compuesto por casi 8.000 especies.',
            'class_id'=>1
        ]);

        DB::table('Orders')->insert([
        	'name'=>'Commelinales',
            'description'=>'Las sinapomorfías que unen al clado: quizás la presencia de fenilfenalenonas, los elementos de vaso escalariformes, las ceras epicuticulares que no están como "agregados tubulares", la cubierta de las semillas formada por dos capas diferentes (testa y tégmen), el endosperma abundante y helobial, la formación de la pared celular en la pequeña cámara calazal precede a la que ocurre en la gran cámara micropilar.',
            'class_id'=>2
        ]);
    }
}
