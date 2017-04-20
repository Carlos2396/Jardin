<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClassesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(FamiliesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(SpeciesTableSeeder::class);
        $this->call(NamesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(LabelsTableSeeder::class);
    }
}
