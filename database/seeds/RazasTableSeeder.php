<?php

use Illuminate\Database\Seeder;
use App\Raza;

class RazasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incremento = [[3, 2]];
        $incremento = json_encode($incremento);
        $subrazas = [1, 2];
        $subrazas = json_encode($subrazas);
        $rasgos = [1, 2, 3, 4, 5];
        $rasgos = json_encode($rasgos);

        Raza::create([
            'nombre' => 'Enano',
            'incremento' => $incremento,
            'edad_adulta' => 50,
            'edad_max' => 350,
            'alineamiento' => 'Legal',
            'tamaño' => 'Mediano',
            'velocidad' => 25,
            'subrazas' => $subrazas,
            'idiomas' => 'Común, Enano',
            'rasgos' => $rasgos
        ]);

        $incremento = [[2, 2]];
        $incremento = json_encode($incremento);
        $subrazas = [3, 4, 5];
        $subrazas = json_encode($subrazas);
        $rasgos = [1, 8, 9, 10];
        $rasgos = json_encode($rasgos);

        Raza::create([
            'nombre' => 'Elfo',
            'incremento' => $incremento,
            'edad_adulta' => 100,
            'edad_max' => 750,
            'alineamiento' => 'Bueno',
            'tamaño' => 'Mediano',
            'velocidad' => 30,
            'subrazas' => $subrazas,
            'idiomas' => 'Común, Élfico',
            'rasgos' => $rasgos
        ]);

        $incremento = [[2, 2]];
        $incremento = json_encode($incremento);
        $subrazas = [6, 7];
        $subrazas = json_encode($subrazas);
        $rasgos = [20, 21, 22];
        $rasgos = json_encode($rasgos);

        Raza::create([
            'nombre' => 'Mediano',
            'incremento' => $incremento,
            'edad_adulta' => 20,
            'edad_max' => 150,
            'alineamiento' => 'Legal Bueno',
            'tamaño' => 'Pequeño',
            'velocidad' => 25,
            'subrazas' => $subrazas,
            'idiomas' => 'Común, Mediano',
            'rasgos' => $rasgos
        ]);

        $incremento = [[1, 1], [2, 1], [3, 1], [4, 1], [5, 1], [6, 1]];
        $incremento = json_encode($incremento);
        $rasgos = [13];
        $rasgos = json_encode($rasgos);

        Raza::create([
            'nombre' => 'Humano',
            'incremento' => $incremento,
            'edad_adulta' => 20,
            'edad_max' => 100,
            'alineamiento' => 'Neutral',
            'tamaño' => 'Mediano',
            'velocidad' => 30,
            'idiomas' => 'Común',
            'rasgos' => $rasgos
        ]);

        $incremento = [[1, 2], [6, 1]];
        $incremento = json_encode($incremento);
        $rasgos = [24, 25, 26];
        $rasgos = json_encode($rasgos);

        Raza::create([
            'nombre' => 'Dracónido',
            'incremento' => $incremento,
            'edad_adulta' => 15,
            'edad_max' => 80,
            'alineamiento' => 'Bueno',
            'tamaño' => 'Mediano',
            'velocidad' => 30,
            'idiomas' => 'Común, Dracónico',
            'rasgos' => $rasgos
        ]);

        $incremento = [[4, 2]];
        $incremento = json_encode($incremento);
        $subrazas = [8, 9];
        $subrazas = json_encode($subrazas);
        $rasgos = [1, 27];
        $rasgos = json_encode($rasgos);

        Raza::create([
            'nombre' => 'Gnomo',
            'incremento' => $incremento,
            'edad_adulta' => 40,
            'edad_max' => 500,
            'alineamiento' => 'Bueno',
            'tamaño' => 'Pequeño',
            'velocidad' => 25,
            'subrazas' => $subrazas,
            'idiomas' => 'Común, Gnómico',
            'rasgos' => $rasgos
        ]);

        $incremento = [[6, 2]];
        $incremento = json_encode($incremento);
        $rasgos = [1, 9, 32];
        $rasgos = json_encode($rasgos);

        Raza::create([
            'nombre' => 'Semielfo',
            'incremento' => $incremento,
            'edad_adulta' => 20,
            'edad_max' => 180,
            'alineamiento' => 'Caótico',
            'tamaño' => 'Mediano',
            'velocidad' => 30,
            'idiomas' => 'Común, Élfico',
            'rasgos' => $rasgos
        ]);

        $incremento = [[1, 2], [3, 1]];
        $incremento = json_encode($incremento);
        $rasgos = [1, 33, 34, 35];
        $rasgos = json_encode($rasgos);

        Raza::create([
            'nombre' => 'Semiorco',
            'incremento' => $incremento,
            'edad_adulta' => 14,
            'edad_max' => 75,
            'alineamiento' => 'Caótico Malvado',
            'tamaño' => 'Mediano',
            'velocidad' => 30,
            'idiomas' => 'Común, Orco',
            'rasgos' => $rasgos
        ]);

        $incremento = [[4, 1], [6, 2]];
        $incremento = json_encode($incremento);
        $rasgos = [1, 36, 37];
        $rasgos = json_encode($rasgos);

        Raza::create([
            'nombre' => 'Tiefling',
            'incremento' => $incremento,
            'edad_adulta' => 20,
            'edad_max' => 100,
            'alineamiento' => 'Caótico',
            'tamaño' => 'Mediano',
            'velocidad' => 30,
            'idiomas' => 'Común, Infernal',
            'rasgos' => $rasgos
        ]);

    }
}
