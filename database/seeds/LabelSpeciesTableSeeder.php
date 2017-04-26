<?php

use Illuminate\Database\Seeder;

class LabelSpeciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('label_specie')->insert([
        	'specie_id'=>1,
            'label_id'=>1
        ]);

        DB::table('label_specie')->insert([
        	'specie_id'=>2,
            'label_id'=>2
        ]);

        DB::table('label_specie')->insert([
        	'specie_id'=>2,
            'label_id'=>2
        ]);

        DB::table('label_specie')->insert([
        	'specie_id'=>2,
            'label_id'=>2
        ]);
    }
}
