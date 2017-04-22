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
            'path' =>'img/species/rosaCalifornicaPrincipal.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaCalifornica1',
            'path' =>'img/species/rosaCalifornica1.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaCalifornica2',
            'path' =>'img/species/rosaCalifornica2.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaCalifornica2',
            'path' =>'img/species/rosaCalifornica3.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteataPrincipal',
            'path' =>'img/species/rosaBracteataPrincipal.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteata1',
            'path' =>'img/species/rosaBracteata1.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteata2',
            'path' =>'img/species/rosaBracteata2.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteata3',
            'path' =>'img/species/rosaBracteata3.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaAzureaPrincipal',
            'path' =>'img/species/eichhorniaAzureaPrincipal.jpg',
            'specie_id' =>3,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaAzurea1',
            'path' =>'img/species/eichhorniaAzurea1.jpg',
            'specie_id' =>3,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaAzurea2',
            'path' =>'img/species/eichhorniaAzurea2.jpg',
            'specie_id' =>3,
        ]);

         DB::table('images')->insert([
        	'name'=>'eichhorniaAzurea3',
            'path' =>'img/species/eichhorniaAzurea3.jpg',
            'specie_id' =>3,
        ]);

         DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipesPrincipal',
            'path' =>'img/species/eichhorniaCrassipesPrincipal.jpg',
            'specie_id' =>4,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipes1',
            'path' =>'img/species/eichhorniaCrassipes1.jpg',
            'specie_id' =>4,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipes2',
            'path' =>'img/species/eichhorniaCrassipes2.jpg',
            'specie_id' =>4,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipes3',
            'path' =>'img/species/eichhorniaCrassipes3.jpg',
            'specie_id' =>4,
        ]);
    }
}
