<?php

use Illuminate\Database\Seeder;

class ClasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clases')->insert([
        	'name'=>'Dicotiledoneae',
            'description' => 'Los caracteres pertenecientes a la angiosperma ancestral y perdidos en la rama de la que se originaron las monocotiledóneas son: La radícula del embrión no aborta como en las monocotiledóneas sino que da origen a una raíz primaria persistente (en las monocotiledóneas la función de absorción la cumplen las raíces adventicias)',
        ]);

         DB::table('clases')->insert([
        	'name'=>'Monocotyledoneae',
            'description'=>' Los tallos de las monocotiledóneas, con pocas excepciones, perdieron la habilidad de crecer continuamente en grosor, es decir, no poseen un meristema lateral (cámbium). '
        ]);

        
          DB::table('clases')->insert([
          	'name' => 'Pinidae',
          	'description'=> ' Comprenden un grupo quizás monofilético de árboles o arbustos altamente ramificados con hojas simples, esto es una posible apomorfía del grupo. Las hojas de las coníferas son lineales, aciculares (como aguja) o con forma de punzón. '
        ]);


         DB::table('clases')->insert([
        	'name'=>'Filicopsida',
            'description'=>' Son plantas vasculares sin semilla (pteridofitas), cuyas características morfológicas más sobresalientes son sus hojas grandes ("megafilos" o "frondes"), usualmente pinadas y con prefoliación circinada. '
        ]);

         DB::table('clases')->insert([
        	'name'=>'Haplomitriopsida',
            'description'=>' Haplomitriopsida o Haplomytriopsida es el nombre botánico de una clase de hepáticas (Hepaticophyta), circunscripta molecularmente, que contiene dos órdenes, Haplomitriales y Treubiales, con alrededor de 15 o 20 especies. '
        ]);
    }
}
