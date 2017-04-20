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
    }
}
