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

        
        DB::table('colors')->insert([
            'name'=>'Rosa',
            'rgb' => '#FF33D6',
        ]);

        DB::table('colors')->insert([
            'name'=>'Morado',
            'rgb' => '#B233FF',
        ]);

        DB::table('colors')->insert([
            'name'=>'Turquesa',
            'rgb' => '#33FFC6',
        ]);

        DB::table('colors')->insert([
            'name'=>'Amarillo',
            'rgb' => '#E4FF33',
        ]);

        DB::table('colors')->insert([
            'name'=>'Naranja',
            'rgb' => '#FF8633',
        ]);
    }
}
