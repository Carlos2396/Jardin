<?php

use Illuminate\Database\Seeder;

class NamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('names')->insert([
        	'name'=>'Rosa americana',
            'specie_id'=>1,
        ]);

         DB::table('names')->insert([
        	'name'=>'Rosa ultramontana',
            'specie_id'=>1,
        ]);

         DB::table('names')->insert([
        	'name'=>'Rosa sinica',
            'specie_id'=>2,
        ]);

         DB::table('names')->insert([
        	'name'=>'Rosa dumont',
            'specie_id'=>2,
        ]);

         DB::table('names')->insert([
        	'name'=>'Jacinto del agua anclado',
            'specie_id'=>3,
        ]);

        DB::table('names')->insert([
        	'name'=>'Camalote',
            'specie_id'=>3,
        ]);

        DB::table('names')->insert([
        	'name'=>'Jacinto del agua anclado',
            'specie_id'=>3,
        ]);

        DB::table('names')->insert([
        	'name'=>'Flor de bora',
            'specie_id'=>4,
        ]);

        DB::table('names')->insert([
        	'name'=>'Tarulla',
            'specie_id'=>4,
        ]);
    }
}
