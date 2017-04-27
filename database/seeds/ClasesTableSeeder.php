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
    }
}
