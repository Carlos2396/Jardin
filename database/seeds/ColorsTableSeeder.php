<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
        	'name'=>'Rojo',
            'rgb' => '#ff0000',
        ]);

        DB::table('colors')->insert([
        	'name'=>'Verde',
            'rgb' => '#00ff00',
        ]);

        DB::table('colors')->insert([
        	'name'=>'Azul',
            'rgb' => '#0000ff',
        ]);
    }
}
