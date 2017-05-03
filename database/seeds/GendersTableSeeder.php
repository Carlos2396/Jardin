<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('genders')->insert([
            'description' => 'Los rosales son arbustos o trepadoras (a veces colgantes), generalmente espinosos, que alcanzan de 2 a 5 metros de altura, en ocasiones, pueden llegar a los 20 m trepando sobre otras plantas.',
            'water_care' => 'Dos veces a la semana',
            'light_care' => 'Planta de sol',
            'temp_care' => 'Todo el año, pero en especial otoño',
            'name' => 'Rosa',
            'family_id' => 1
        ]);

        DB::table('genders')->insert([
            'description' => 'Son macrófitos flotantes, que alcanzan hasta un metro de altura, aunque normalmente no superan los 50 cm. El cuerpo principal de la planta está formado por un rizoma estolonífero y ramificado, que alcanza los 30 cm de largo, del que nacen brotes auxiliares en ángulos variables. Los estolones son purpúreos, alcanzando los 50 cm de longitud.',
            'water_care' => 'Planta acuatica, requiere estar en un estanque',
            'light_care' => 'Planta de sol',
            'temp_care' => 'Calido, primavera y verano',
            'name' => 'Eichhornia',
            'family_id' => 2
        ]);

        
        DB::table('genders')->insert([
            'description' => 'Muchas, si no todas las poblaciones actuales son relictas.
                Se encuentran en bosques y estepas, con una afinidad para los sitios expuestos. Estos árboles columnados son fósiles vivientes, de la edad Mesozoica.',
            'water_care' => 'Planta acuatica, requiere estar en un estanque',
            'light_care' => 'Planta de sol',
            'temp_care' => 'Al menos 30 grados',
            'name' => 'Araucaria',
            'family_id' => 3
        ]);

        DB::table('genders')->insert([
            'description' => ' La ramificación es única en la que casi todas las ramas laterales no tienen otra ramificación; después de algunos años, cualquier rama termina en un cono de conífera (macho o hembra) ó cesa el crecimiento, después de que sucede esto o el cono está maduro, la rama muere.',
            'water_care' => ' 3 veces a la semana',
            'light_care' => 'No requiere mucho ',
            'temp_care' => ' Sobrevive temperaturas frias ',
            'name' => 'Wollemia',
            'family_id' => 3
        ]);

        DB::table('genders')->insert([
            'description' => ' Contiene fanerófitos perennifolios y son endémicos de Nueva Zelanda. ',
            'water_care' => ' 1 vez al dia',
            'light_care' => ' No requiere ',
            'temp_care' => ' Sobrevive temperaturas extremas ',
            'name' => 'Halocarpus',
            'family_id' => 4
        ]);

        DB::table('genders')->insert([
            'description' => ' Son árboles de pequeño y mediano tamaño , llegando a alcanzar los 10-30 m de altura. Los brotes verdes estructurales básicos son de 2-3 años, entonces se volverá oscura, como la espesa corteza. ',
            'water_care' => '1 vez cada 2 semanas',
            'light_care' => 'Planta de sol',
            'temp_care' => 'Temperaturas frescas, primavera',
            'name' => 'Phyllocladus',
            'family_id' => 4
        ]);

        DB::table('genders')->insert([
            'description' => 'Dacrydium es el nombre botánico de un género de coníferas dentro de la familia de las podocarpáceas. Consta de 21 especies de fanerófitos dioicos y perennifolios',
            'water_care' => '2 veces al dia',
            'light_care' => 'Planta de sol',
            'temp_care' => 'Caliente',
            'name' => 'Dacrydium',
            'family_id' => 4
        ]);

        DB::table('genders')->insert([
            'description' => 'Las sciadopitiáceas (nombre científico Sciadopityaceae), son una familia de coníferas dentro del orden de las Cupressales. Es una familia con un solo género, Sciadopitys y una sola especie',
            'water_care' => 'Planta acuatica, requiere estar en un estanque',
            'light_care' => '8 horas de sol al día',
            'temp_care' => 'Invierno y otoño ',
            'name' => 'Sciadopitys',
            'family_id' => 5
        ]);

        DB::table('genders')->insert([
            'description' => ' Son oriundos de China, Taiwan y Vietnam del Norte. Donde pueden llegar a alcanzar los 50-55 m de altura. ',
            'water_care' => 'Planta acuatica, requiere estar en un estanque',
            'light_care' => 'Planta de sol',
            'temp_care' => 'Temperaturas frias ',
            'name' => 'Cunninghamia',
            'family_id' => 6
        ]);

        DB::table('genders')->insert([
            'description' => 'El género es endémico del oeste de Tasmania, donde crece a gran altitud en los bosques templados lluviosos.',
            'water_care' => 'Planta acuatica, requiere estar en un estanque',
            'light_care' => 'Entre 4 y 6 horas al día ',
            'temp_care' => 'Temperaturas templados solamente',
            'name' => 'Athrotaxis',
            'family_id' => 6
        ]);

        DB::table('genders')->insert([
            'description' => ' Angiopteris es un género de helechos perteneciente a la familia de las Marattiaceae. ',
            'water_care' => 'Planta acuatica, requiere estar en un estanque',
            'light_care' => 'Planta de sol',
            'temp_care' => 'Calido, primavera y verano',
            'name' => 'Angiopteris',
            'family_id' => 7
        ]);

        DB::table('genders')->insert([
            'description' => 'Archangiopteris es un género de helechos perteneciente a la Familia de las Marattiaceae',
            'water_care' => ' Una vez a la semana ',
            'light_care' => 'Planta de noche ',
            'temp_care' => 'Frio, menor a 20 grados celsius ',
            'name' => 'Archangiopteris',
            'family_id' => 7
        ]);

        DB::table('genders')->insert([
            'description' => 'Son plantas de hábitos terrestres; con rizoma rastrero a erecto o ascendente, con raíces gruesas y carnosas, la superficie dorsal cubierta por dos hileras de estípulas; hojas dimorfas; pecíolo terete, ocasionalmente con nudos hinchados',
            'water_care' => ' 3 veces al dia ',
            'light_care' => 'Planta de abundante sol ',
            'temp_care' => 'Calidas ',
            'name' => 'Danaea',
            'family_id' => 7
        ]);

        DB::table('genders')->insert([
            'description' => 'Regiones templadas, subtropicales y tropicales, casi mundiales, pero disjuntas y locales. La mayor diversidad es el hemisferio meridional, específicamente Australasia,',
            'water_care' => ' Planta de agua ',
            'light_care' => 'Planta de sol ',
            'temp_care' => 'Calurosas, especialmente en verano ',
            'name' => 'Haplomitrium',
            'family_id' => 8
        ]);

        DB::table('genders')->insert([
            'description' => 'Todos los fósiles conocidos provienen de principios del Pérmico de los depósitos del oeste de Selandia',
            'water_care' => ' Una vez cada 2 días ',
            'light_care' => 'Planta de sol ',
            'temp_care' => 'Calidas, como en verano y primavera ',
            'name' => 'Gessella',
            'family_id' => 8
        ]);

        DB::table('genders')->insert([
            'description' => 'Sus especies son grandes y frondosas',
            'water_care' => 'Dos veces a la semana',
            'light_care' => 'Planta de sol',
            'temp_care' => 'Todo el año, pero en especial otoño',
            'name' => 'Apotreubia',
            'family_id' => 9
        ]);
    }
}
