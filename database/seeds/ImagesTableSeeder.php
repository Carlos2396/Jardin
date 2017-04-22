<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('species')->insert([
        	'name'=>'rosaCalifornicaPrincipal',
            'path' =>'img/species/',
            'specie_id' =>1,
        ]);
    }
}
