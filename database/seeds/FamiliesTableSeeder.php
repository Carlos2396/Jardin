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

         DB::table('families')->insert([
            'name'=>'Araucariaceae',
            'description' => ' Son una familia de coníferas del Orden Araucariales, comprende 3 géneros. Son árboles de larga vida altamente resinosos, usualmente muy simétricos y cónicos.',
            'order_id' => 3
        ]);

        DB::table('families')->insert([
            'name'=>'Podocarpaceae',
            'description' => ' Son una familia de coníferas del orden Araucariales. Estas coníferas se distribuyen predominantemente por el Hemisferio Sur, con una gran importancia ecológica y forestal en Australasia, y en menor medida en Asia sudoriental, Sudamérica y África.',
            'order_id' => 3
        ]);


        DB::table('families')->insert([
            'name'=>'Sciadopityaceae',
            'description' => 'Las sciadopitiáceas (nombre científico Sciadopityaceae), son una familia de coníferas dentro del orden de las Cupressales.',
            'order_id' => 4
        ]);

        DB::table('families')->insert([
            'name'=>'Cupressaceae',
            'description' => ' Son árboles o arbustos con madera y follaje muchas veces aromáticos, con hojas como escamas fuertemente apretadas desde 1 mm a 3 cm de largo. ',
            'order_id' => 4
        ]);

        DB::table('families')->insert([
            'name'=>'Marattiaceae',
            'description' => 'Son la única familia del orden Marattiales, son un grupo de helechos monofilético encontrado principalmente en regiones tropicales húmedas',
            'order_id' => 5
        ]);

        DB::table('families')->insert([
            'name'=>'Haplomitriaceae',
            'description' => ' Haplomitriaceae es el nombre botánico de la única familia de plantas del orden Haplomitriales. ',
            'order_id' => 6
        ]);

        DB::table('families')->insert([
            'name'=>'Treubiaceae ',
            'description' => 'Treubiaceae es una familia de Marchantiophyta en el orden Treubiales.',
            'order_id' => 7 
        ]);
    }
}
