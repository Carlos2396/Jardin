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
    }
}
