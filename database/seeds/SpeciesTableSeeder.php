<?php

use Illuminate\Database\Seeder;

class SpeciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('species')->insert([
        	'name'=>'Californica',
            'description' => 'Rosa californica es un arbusto que forma matorral con tallos espinosos y curvos. Las fragantes flores pueden crecer solitarias o en inflorescencias de varias flores. Cada rosa está abierta de cara y plana en general, con cinco pétalos en cualquier tono de color rosa de casi blanco a magenta profundo. ',
            'especial_care' => '',
            'price' => 25.00,
            'gender_id' =>1,
        ]);

        DB::table('species')->insert([
        	'name'=>'Bracteata',
            'description' => 'Arbusto de una altura de 4 metros, con tallos arqueados que están armados con espinas curvadas dispuestas en pares. Las hojas son persistentes y constan de 5 a 9 foliolos elípticos de 2 a 5 cm de longitud, con los bordes dentados.',
            'especial_care' => '',
            'price' => 45.00,
            'gender_id' =>1,
        ]);

        DB::table('species')->insert([
        	'name'=>'Azurea',
            'description' => 'Es una planta arraigada de hojas flotantes. Tiene tallos elongados ascendentes hasta la superficie del agua; hojas sumergidas caulinares, dísticas, alternas, sésiles, lineares y como una cinta (especímenes normalmente colectados sin hojas sumergidas). Hojas pecioladas con pecíolos fuertemente doblados, que sostienen láminas más o menos emergentes desde tallos flotantes; láminas de 7 a 17 cm, cuneadas a truncadas en la base.',
            'especial_care' => 'Abundante agua',
            'price' => 75.00,
            'gender_id' =>2,
        ]);

        DB::table('species')->insert([
        	'name'=>'Crassipes',
            'description' => 'Tallo vegetativo sumamente corto; hojas en rosetas, ascendentes a extendidas; pecíolos cortos, hinchados (bulbosos), con tejido aerenquimatoso; con dimorfismo foliar al crecer agrupadas: hojas puramente ascendentes y pecíolos elongados y menos hinchados; láminas de 2 a 16 cm. Inflorescencia: espiga; flores azules a celestes, y una mancha amarilla en el lóbulo superior del perianto; fruto: cápsula de 1,5 cm.',
            'especial_care' => 'Abundante agua',
            'price' => 175.00,
            'gender_id' =>2,
        ]);
    }
}
