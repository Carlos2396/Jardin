<?php

use Illuminate\Database\Seeder;

class ColorSpecieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('color_specie')->insert([
        	'color_id'=>1,
            'specie_id'=>1,
            'quantity'=>50,
        ]);

         DB::table('color_specie')->insert([
        	'color_id'=>2,
            'specie_id'=>1,
            'quantity'=>30,
        ]);

        DB::table('color_specie')->insert([
        	'color_id'=>2,
            'specie_id'=>2,
            'quantity'=>40,
        ]);

        DB::table('color_specie')->insert([
        	'color_id'=>3,
            'specie_id'=>2,
            'quantity'=>30,
        ]);

        DB::table('color_specie')->insert([
        	'color_id'=>1,
            'specie_id'=>3,
            'quantity'=>3,
        ]);

        DB::table('color_specie')->insert([
        	'color_id'=>2,
            'specie_id'=>3,
            'quantity'=>150,
        ]);

        DB::table('color_specie')->insert([
        	'color_id'=>3,
            'specie_id'=>4,
            'quantity'=>56,
        ]);

         DB::table('color_specie')->insert([
        	'color_id'=>1,
            'specie_id'=>4,
            'quantity'=>48,
        ]);
    }
}
