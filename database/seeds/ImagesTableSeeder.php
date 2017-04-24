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
         DB::table('images')->insert([
        	'name'=>'rosaCalifornicaPrincipal',
            'path' =>'img/species/rosaCalifornica_0jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaCalifornica1',
            'path' =>'img/species/rosaCalifornica_1.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaCalifornica2',
            'path' =>'img/species/rosaCalifornica_2.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaCalifornica2',
            'path' =>'img/species/rosaCalifornica_3.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteataPrincipal',
            'path' =>'img/species/rosaBracteata_0.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteata1',
            'path' =>'img/species/rosaBracteata_1.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteata2',
            'path' =>'img/species/rosaBracteata_2.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteata3',
            'path' =>'img/species/rosaBracteata_3.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaAzureaPrincipal',
            'path' =>'img/species/eichhorniaAzurea_0.jpg',
            'specie_id' =>3,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaAzurea1',
            'path' =>'img/species/eichhorniaAzurea_1.jpg',
            'specie_id' =>3,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaAzurea2',
            'path' =>'img/species/eichhorniaAzurea_2.jpg',
            'specie_id' =>3,
        ]);

         DB::table('images')->insert([
        	'name'=>'eichhorniaAzurea3',
            'path' =>'img/species/eichhorniaAzurea_3.jpg',
            'specie_id' =>3,
        ]);

         DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipesPrincipal',
            'path' =>'img/species/eichhorniaCrassipes_0.jpg',
            'specie_id' =>4,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipes1',
            'path' =>'img/species/eichhorniaCrassipes_1.jpg',
            'specie_id' =>4,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipes2',
            'path' =>'img/species/eichhorniaCrassipes_2.jpg',
            'specie_id' =>4,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipes3',
            'path' =>'img/species/eichhorniaCrassipes_3.jpg',
            'specie_id' =>4,
        ]);
    }
}
