<?php

use Illuminate\Database\Seeder;

class CaracteristicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Caracteristica::create([
           'nombre' => 'Fuerza'
        ]);

        \App\Caracteristica::create([
           'nombre' => 'Destreza'
        ]);

        \App\Caracteristica::create([
           'nombre' => 'Constitución'
        ]);

        \App\Caracteristica::create([
           'nombre' => 'Inteligencia'
        ]);

        \App\Caracteristica::create([
           'nombre' => 'Sabiduría'
        ]);

        \App\Caracteristica::create([
           'nombre' => 'Carisma'
        ]);
    }
}
