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
        DB::table('orders')->insert([
        	'name'=>'Rosales',
            'description'=>'Es uno de los órdenes más importantes por la variedad y diversidad de los individuos que agrupa. Está compuesto por casi 8.000 especies.',
            'clase_id'=>1
        ]);

        DB::table('orders')->insert([
        	'name'=>'Commelinales',
            'description'=>'Las sinapomorfías que unen al clado: quizás la presencia de fenilfenalenonas, los elementos de vaso escalariformes, las ceras epicuticulares que no están como "agregados tubulares", la cubierta de las semillas formada por dos capas diferentes (testa y tégmen), el endosperma abundante y helobial, la formación de la pared celular en la pequeña cámara calazal precede a la que ocurre en la gran cámara micropilar.',
            'clase_id'=>2
        ]);

        
        DB::table('orders')->insert([
            'name'=>'Araucariales',
            'description'=>'Las Araucariales son un orden de coníferas. Alcanzó su máxima diversidad en los períodos Jurásico y Cretáceo; cuando los dinosaurios se extinguieron, también lo hicieron las Araucariales en el hemisferio norte.',
            'clase_id'=>3
        ]);

        DB::table('orders')->insert([
            'name'=>'Cupressales',
            'description'=>'Cupressales son un orden de coníferas.',
            'clase_id'=>3
        ]);

        DB::table('orders')->insert([
            'name'=>'Marattiales',
            'description'=>'Tienden a tener frondes pinadas muy grandes con esporangios de pared gruesa ubicados en la cara abaxial, en grupos bien definidos (a veces fusionados en sinangios)',
            'clase_id'=>4
        ]);

        DB::table('orders')->insert([
            'name'=>'Haplomitriales',
            'description'=>'Las Haplomitriales (o Calobryales) forman un orden de la clase Haplomitriopsida, considerada la más primitiva, que posee una sola familia, las Haplomitriaceae con tres especies reconocidas.',
            'clase_id'=>5
        ]);

        DB::table('orders')->insert([
            'name'=>'Treubiales',
            'description'=>'Las especies son grandes y frondosas, y fueron clasificados previamente en los Metzgeriales.',
            'clase_id'=>5
        ]);
    }
}
