<?php

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
        $this->call(CaracteristicasTableSeeder::class);
        $this->call(RasgosRacialesTableSeeder::class);
        $this->call(SubrazasTableSeeder::class);
        $this->call(RazasTableSeeder::class);
        $this->call(AscendenciaDraconicaTableSeeder::class);
        $this->call(ClasesTableSeeder::class);
    }
}
