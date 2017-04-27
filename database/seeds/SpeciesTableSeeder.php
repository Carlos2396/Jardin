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

        DB::table('species')->insert([
            'name'=>'Araucaria angustifolia',
            'description' => ' Hojas anchas, conos de más de 12 cm de diámetro y germinación de semillas hipogea.',
            'especial_care' => '',
            'price' => 200.00,
            'gender_id' =>3,
        ]);

          DB::table('species')->insert([
            'name'=>'Araucaria biramulata',
            'description' => 'Hojas estrechas, como punzones; conos de menos de 12 cm de diámetro y germinación de semillas epigea',
            'especial_care' => 'Cuida mucho la temperatura de la planta',
            'price' => 275.00,
            'gender_id' =>3,
        ]);

           DB::table('species')->insert([
            'name'=>'Wollemia nobilis',
            'description' => 'Hay solamente unos cientos de árboles que crecen en estado salvaje, en tres localidades. Es muy difícil contarlos ya que la mayoría de los árboles tienen múltiples tallos y pueden estar conectados en un sistema de raíces.',
            'especial_care' => 'Abundante agua',
            'price' => 350.00,
            'gender_id' =>4,
        ]);


            DB::table('species')->insert([
            'name'=>'Halocarpus kirkii',
            'description' => 'Halocarpus kirkii o Monoao es un árbol del bosque endémico de Nueva Zelanda.1 Cuando se le ve a la distancia, parece un pequeño kauri en su apariencia total. Puede ser distinguido usualmente por su follaje juvenil, el cuál con frecuencia permanece en las ramas más bajas hasta que el árbol crece aproximadamente a 10 metros de alto.',
            'especial_care' => ' agua',
            'price' => 600.00,
            'gender_id' =>5,
        ]);

            DB::table('species')->insert([
            'name'=>'Halocarpus biformis',
            'description' => ' Comúnmente conocido como pino amarillo (yellow pine) o pino rosa (pink pine), es un árbol de las coníferas que es endémico de Nueva Zelanda. El árbol puede lograr alturas de 10m, pero en áreas abiertas es usualmente un arbusto bajo extendido.',
            'especial_care' => '',
            'price' => 475.00,
            'gender_id' =>5,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Phyllocladus alpinus',
            'description' => 'La forma de esta planta es la de un arbusto o un árbol pequeño que alcanza hasta los siete metros de altura',
            'especial_care' => '',
            'price' => 250.00,
            'gender_id' =>6,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Phyllocladus trichomanoides',
            'description' => 'Tanekaha es un árbol de bosque de talla mediana que crece a una altura de 20 m y puede alcanzar 1 m de diámetro de tronco. Las principales yemas estructurales son verdes por 2-3 años, se vuelven cafés en la medida en que la corteza se engruesa. ',
            'especial_care' => '',
            'price' => 200.00,
            'gender_id' =>6,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Dacrydium cupressinum',
            'description' => 'El rimu es un árbol de lento crecimiento que eventualmente llega a lograr alturas de hasta 50 m, sin embargo la mayoría de los árboles que aún sobreviven miden entre 20 a 35 m de alto. Típicamente aparece de manera sobresaliente de los bosques templados de hoja ancha',
            'especial_care' => '',
            'price' => 450.00,
            'gender_id' =>7,
        ]);
          
          DB::table('species')->insert([
            'name'=>'Dacrydium nidulum',
            'description' => 'Es un árbol que alcanza un tamaño de 10 a 30 m de altura, y 18-50 cm de diámetro. Con numerosas ramitas que forman una densa corona. Las hojas de hasta 2 cm de largo hacia adelante ligeramente curvadas, aguda, triangulares en sección transversal, de 0.2 mm de ancho y menos gruesas.',
            'especial_care' => '',
            'price' => 300.00,
            'gender_id' =>7,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Sciadopitys verticillata',
            'description' => 'Al pino sombrilla del Japón se le llama también komayaki o pino parasol. Se considera que esta conífera es un fósil viviente que carece de parientes vivos; es un árbol perennifolio, que alcanza los 30 m de altura, muy apreciado en jardinería. ',
            'especial_care' => 'Abundante agua',
            'price' => 250.00,
            'gender_id' =>8,
        ]);
            
            DB::table('species')->insert([
            'name'=>'Cunninghamia konishii',
            'description' => 'Árbol originario del centro y sur de China, taiwán, Vietnam, laos. Tiene una gran capacidad para rebrotar de cepa, la madera es de buena calidad. Esta especie de árbol no es hermafrodita, por lo tanto se puede diferenciar el sexo de cada uno según sus conos. ',
            'especial_care' => 'Abundante agua',
            'price' => 400.00,
            'gender_id' =>9,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Cunninghamia lanceolata',
            'description' => 'Es de hábito monopodial, posee copa piramidal, angosta, conserva sus ramas inferiores, que se extienden horizontalmente. Su tronco es recto. su altura oscila entre los 10 y los 25 m. Sus hojas son simples, dispuestas en espiral o en dos planos más o menos divergentes, lineares lanceoladas, falcadas (2,5 -7 cm x 0,4-0,7 cm), haz verde brillante, envés claro, con anchas bandas estomáticas blanquecinas separadas por la nervadura media, margen finamente aserrado. Es un Árbol de follaje perenne.',
            'especial_care' => '',
            'price' => 300.00,
            'gender_id' =>9,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Athrotaxis cupressoides',
            'description' => 'Es un árbol siempreverde de las coníferas creciendo 10–20 m de alto, con un tronco de hasta 1 m diámetro. Las hojas se parecen a escamas, 3–6 mm de largo y 2–3 mm de ancho, dispuestas espiralmente en las yemas. Los conos son globosos, 10–16 mm de diámetro, con 10–16 escamas dispuestas en espiral; maduran aproximadamente seis meses después de la polinización. Los conos de polen miden 3–5 mm de largo.',
            'especial_care' => '',
            'price' => 250.00,
            'gender_id' =>10,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Athrotaxis selaginoides',
            'description' => ' Es un árbol perennifolio conífero creciendo a 20–30 m de alto, con un tronco de hasta 1.5 m de diámetro. Las hojas se parecen a garras, 7–18 mm de largo y 3–4 mm de ancho, dispuestas en espiral en las yemas. Los conos son globosos, 15–30 mm de diámetro, con 20–30 escamas dispuestas en espiral; maduran aproximadamente seis meses después de la polinización. Los conos del polen miden 4–5 mm de largo. ',
            'especial_care' => '',
            'price' => 250.00,
            'gender_id' =>10,
        ]);
           

        DB::table('species')->insert([
            'name'=>'Angiopteris evecta',
            'description' => 'Las enormes frondas maduras miden hasta 9 metros (29.5 pies) de largo. Estos más grandes se encuentran aparentemente en Queensland, donde la lámina o la hoja puede ser de hasta 23 pies (7 metros) de longitud con el pecíolo o tallo que es un adicional de(2 metros) de largo  (9 metros)',
             'especial_care' => '',
            'price' => 80.00,
            'gender_id' =>11,
        ]);
            
           
           DB::table('species')->insert([
            'name'=>'Angiopteris confertinervia',
            'description' => 'Tallo vegetativo sumamente corto; hojas en rosetas, ascendentes a extendidas; pecíolos cortos, hinchados (bulbosos), con tejido aerenquimatoso; con dimorfismo foliar al crecer agrupadas: hojas puramente ascendentes y pecíolos elongados y menos hinchados; láminas de 2 a 16 cm. Inflorescencia: espiga; flores azules a celestes, y una mancha amarilla en el lóbulo superior del perianto; fruto: cápsula de 1,5 cm.',
            'especial_care' => 'Abundante agua',
            'price' => 70.00,
            'gender_id' =>11,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Archangiopteris itoi ',
            'description' => 'Arbol muy bello y frondoso',
            'especial_care' => '',
            'price' => 60.00,
            'gender_id' =>12,
        ]);
         
         DB::table('species')->insert([
            'name'=>'Eichhornia crassipes',
            'description' => 'Arbol muy frondoso y bello',
            'especial_care' => 'Abundante agua',
            'price' => 40.00,
            'gender_id' =>12,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Danaea lucens',
            'description' => 'Las plantas de Danaea Lucens son grandes, de hasta 200 centímetros de altura. Disponen de rizomas rastreros dispuestos radialmente a 15 centímetros (5,9 pulgadas) de espesor y hojas pinadas. Los ápices son finamente denticulados.',
            'especial_care' => '',
            'price' => 150.00,
            'gender_id' =>13,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Danaea kalevala',
            'description' => 'Las plantas de Danaea kalevala son grandes, de hasta 200 centímetros de altura. Disponen de rizomas rastreros dispuestos radialmente a 15 centímetros (5,9 pulgadas) de espesor y hojas pinadas. Los ápices son finamente denticulados. ',
            'especial_care' => 'Abundante agua',
            'price' => 300.00,
            'gender_id' =>13,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Haplomitrium dentatum',
            'description' => ' Haplomitrium dentatum es una especie de liverwort de la India.',
            'especial_care' => 'Abundante agua',
            'price' => 30.00,
            'gender_id' =>14,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Haplomitrium grollei',
            'description' => ' Haplomitrium grollei es una especie de liverwort de la India.',
            'especial_care' => 'Abundante agua',
            'price' => 40.00,
            'gender_id' =>14,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Gessella communis',
            'description' => ' Tallo vegetativo sumamente corto; hojas en rosetas, ascendentes a extendidas; pecíolos cortos, hinchados (bulbosos), con tejido aerenquimatoso; con dimorfismo foliar al crecer agrupadas: hojas puramente ascendentes y pecíolos elongados y menos hinchados; láminas de 2 a 16 cm. Inflorescencia: espiga; flores azules a celestes, y una mancha amarilla en el lóbulo superior del perianto; fruto: cápsula de 1,5 cm.',
            'especial_care' => '',
            'price' => 70.00,
            'gender_id' =>15,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Gessella striata',
            'description' => ' Árbol originario del centro y sur de China, taiwán, Vietnam, laos. Tiene una gran capacidad para rebrotar de cepa, la madera es de buena calidad. Esta especie de árbol no es hermafrodita, por lo tanto se puede diferenciar el sexo de cada uno según sus conos.',
            'especial_care' => '',
            'price' => 80.00,
            'gender_id' =>15,
        ]);
           
           DB::table('species')->insert([
            'name'=>'Apotreubia yunnanensis ',
            'description' => ' Ideal para la casa como decoración.',
            'especial_care' => '',
            'price' => 20.00,
            'gender_id' =>16,
        ]);
    }
}
