<?php

use Illuminate\Database\Seeder;
use App\Subraza;

class SubrazasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incremento = [5, 1];
        $incremento = json_encode($incremento);
        $rasgos = [6];
        $rasgos = json_encode($rasgos);

        Subraza::create([
           'nombre' => 'Enano de las colinas',
            'incremento' => $incremento,
            'rasgos' => $rasgos
        ]);

        $incremento = [1, 2];
        $incremento = json_encode($incremento);
        $rasgos = [7];
        $rasgos = json_encode($rasgos);

        Subraza::create([
           'nombre' => 'Enano de las montañas',
            'incremento' => $incremento,
            'rasgos' => $rasgos
        ]);

        $incremento = [4, 1];
        $incremento = json_encode($incremento);
        $rasgos = [11, 12, 13];
        $rasgos = json_encode($rasgos);

        Subraza::create([
           'nombre' => 'Alto Elfo',
            'incremento' => $incremento,
            'rasgos' => $rasgos
        ]);

        $incremento = [5, 1];
        $incremento = json_encode($incremento);
        $rasgos = [11, 14, 15];
        $rasgos = json_encode($rasgos);

        Subraza::create([
           'nombre' => 'Elfo de los bosques',
            'incremento' => $incremento,
            'rasgos' => $rasgos
        ]);

        $incremento = [6, 1];
        $incremento = json_encode($incremento);
        $rasgos = [16, 17, 18, 19];
        $rasgos = json_encode($rasgos);

        Subraza::create([
           'nombre' => 'Elfo Oscuro (Drow)',
            'incremento' => $incremento,
            'rasgos' => $rasgos
        ]);

        $incremento = [6, 1];
        $incremento = json_encode($incremento);
        $rasgos = [23];
        $rasgos = json_encode($rasgos);

        Subraza::create([
           'nombre' => 'Mediano Piesligeros',
            'incremento' => $incremento,
            'rasgos' => $rasgos
        ]);

        $incremento = [3, 1];
        $incremento = json_encode($incremento);
        $rasgos = [2];
        $rasgos = json_encode($rasgos);

        Subraza::create([
           'nombre' => 'Mediano Fornido',
            'incremento' => $incremento,
            'rasgos' => $rasgos
        ]);

        $incremento = [2, 1];
        $incremento = json_encode($incremento);
        $rasgos = [28, 29];
        $rasgos = json_encode($rasgos);

        Subraza::create([
           'nombre' => 'Gnomo de los bosques',
            'incremento' => $incremento,
            'rasgos' => $rasgos
        ]);

        $incremento = [3, 1];
        $incremento = json_encode($incremento);
        $rasgos = [30, 31];
        $rasgos = json_encode($rasgos);

        Subraza::create([
           'nombre' => 'Gnomo de las rocas',
            'incremento' => $incremento,
            'rasgos' => $rasgos
        ]);

    }
}
