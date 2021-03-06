<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CentrosTableSeeder::class);
        $this->call(VacunasTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(VacunatoriosTableSeeder::class);
        $this->call(MedicosTableSeeder::class);
        $this->call(DosisTableSeeder::class);
        $this->call(VacunadosTableSeeder::class);


    }
}
