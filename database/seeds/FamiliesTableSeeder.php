<?php

use Illuminate\Database\Seeder;

class FamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('families')->insert([
        	'name'=>'Rosaceae',
            'description' => 'La familia Rosaceae incluye géneros con características muy heterogéneas, sin embargo, la característica común más importante es la presencia de un tálamo o receptáculo floral muy desarrollado, que varía desde una forma plana (en Quillaja, Kageneckia), pasando por convexa (en Rubus, Fragaria), hasta de forma cóncava (en Rosa).',
            'order_id' => 1
        ]);

        DB::table('families')->insert([
        	'name'=>'Pontederiaceae',
            'description' => 'Hierbas, perennes o raramente anuales, flotantes a emergentes acuáticas, tallos rizomatosos o estoloníferos, esponjosos. Pelos simples, sólo en las partes reproductivas.',
            'order_id' => 2
        ]);
    }
}
