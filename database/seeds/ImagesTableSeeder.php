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
            'path' =>'img/species/RosaCalifornica_0jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaCalifornica1',
            'path' =>'img/species/RosaCalifornica_1.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaCalifornica2',
            'path' =>'img/species/RosaCalifornica_2.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaCalifornica2',
            'path' =>'img/species/RosaCalifornica_3.jpg',
            'specie_id' =>1,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteataPrincipal',
            'path' =>'img/species/RosaBracteata_0.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteata1',
            'path' =>'img/species/RosaBracteata_1.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteata2',
            'path' =>'img/species/RosaBracteata_2.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'rosaBracteata3',
            'path' =>'img/species/RosaBracteata_3.jpg',
            'specie_id' =>2,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaAzureaPrincipal',
            'path' =>'img/species/EichhorniaAzurea_0.jpg',
            'specie_id' =>3,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaAzurea1',
            'path' =>'img/species/EichhorniaAzurea_1.jpg',
            'specie_id' =>3,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaAzurea2',
            'path' =>'img/species/EichhorniaAzurea_2.jpg',
            'specie_id' =>3,
        ]);

         DB::table('images')->insert([
        	'name'=>'eichhorniaAzurea3',
            'path' =>'img/species/EichhorniaAzurea_3.jpg',
            'specie_id' =>3,
        ]);

         DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipesPrincipal',
            'path' =>'img/species/EichhorniaCrassipes_0.jpg',
            'specie_id' =>4,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipes1',
            'path' =>'img/species/EichhorniaCrassipes_1.jpg',
            'specie_id' =>4,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipes2',
            'path' =>'img/species/EichhorniaCrassipes_2.jpg',
            'specie_id' =>4,
        ]);

        DB::table('images')->insert([
        	'name'=>'eichhorniaCrassipes3',
            'path' =>'img/species/EichhorniaCrassipes_3.jpg',
            'specie_id' =>4,
        ]);
    }
}
