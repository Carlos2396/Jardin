<?php

use Illuminate\Database\Seeder;

class LabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labels')->insert([
        	'name'=>'10%'
        ]);

         DB::table('labels')->insert([
        	'name'=>'20%'
        ]);

         DB::table('labels')->insert([
        	'name'=>'30%'
        ]);

         DB::table('labels')->insert([
        	'name'=>'40%'
        ]);

         DB::table('labels')->insert([
        	'name'=>'50%'
        ]);

         DB::table('labels')->insert([
        	'name'=>'70%'
        ]);

         DB::table('labels')->insert([
        	'name'=>'New!'
        ]);

         DB::table('labels')->insert([
        	'name'=>'Fashion'
        ]);

         DB::table('labels')->insert([
        	'name'=>'Remate'
        ]);

         DB::table('labels')->insert([
        	'name'=>'Plantitas Bonis'
        ]);

         DB::table('labels')->insert([
        	'name'=>'Plantitas Feas'
        ]);

         DB::table('labels')->insert([
        	'name'=>'Nuevos Colores'
        ]);

         DB::table('labels')->insert([
        	'name'=>'Nuevos Modelos'
        ]);
    }
}
