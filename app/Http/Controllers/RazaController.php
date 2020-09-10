<?php

namespace App\Http\Controllers;

use App\Caracteristica;
use App\RasgoRacial;
use App\Raza;
use App\Subraza;

class RazaController extends Controller
{

    public function index()
    {
        $fields = ['id', 'nombre', 'incremento', 'edad_adulta', 'edad_max', 'alineamiento', 'tamaño', 'velocidad', 'subrazas', 'idiomas', 'rasgos'];
        $razas = Raza::all();

        $result = [];

        foreach ($razas as $raza) {
            $newElement = [];
            foreach ($fields as $field) {
                if ($field == 'incremento') {
                    $incrementos = json_decode($raza[$field]);
                    $incrementos_list = [];
                    foreach ($incrementos as $incremento) {
                        $incrementos = '+' . $incremento[1] . ' ' . Caracteristica::find($incremento[0])->nombre;
                        array_push($incrementos_list, $incrementos);
                    }
                    $incrementos_result = implode(', ', $incrementos_list);
                    $newElement[$field] = $incrementos_result;
                } elseif ($field == 'subrazas') {
                    $subrazas = json_decode($raza[$field]);
                    if (!is_null($subrazas)) {
                        $subrazas_list = [];
                        foreach ($subrazas as $subraza) {
                            $name = Subraza::find($subraza)->nombre;
                            array_push($subrazas_list, $name);
                        }

                        $subrazas_result = implode(', ', $subrazas_list);
                        $newElement[$field] = $subrazas_result;
                    }
                } elseif ($field == 'rasgos') {
                    $rasgos = json_decode($raza[$field]);
                    $rasgos_list = [];
                    foreach ($rasgos as $rasgo) {
                        $rasgo_racial = RasgoRacial::find($rasgo)->nombre;
                        array_push($rasgos_list, $rasgo_racial);
                    }

                    $rasgos_result = implode(', ', $rasgos_list);
                    $newElement[$field] = $rasgos_result;
                } else {
                    $newElement[$field] = $raza->$field;
                }

            }

            array_push($result, $newElement);
        }

        return $result;
    }

    public function show($id)
    {
        $result = [];
        $fields = ['id', 'nombre', 'incremento', 'edad_adulta', 'edad_max', 'alineamiento', 'tamaño', 'velocidad', 'subrazas', 'idiomas', 'rasgos'];

        $raza = Raza::find($id);

        foreach ($fields as $field) {
            if ($field == 'incremento') {
                $incrementos = json_decode($raza[$field]);
                $incrementos_list = [];
                foreach ($incrementos as $incremento) {
                    $incrementos = '+' . $incremento[1] . ' ' . Caracteristica::find($incremento[0])->nombre;
                    array_push($incrementos_list, $incrementos);
                }
                $incrementos_result = implode(', ', $incrementos_list);
                $result[$field] = $incrementos_result;
            } elseif ($field == 'subrazas') {
                $subrazas = json_decode($raza[$field]);
                if (!is_null($subrazas)) {
                    $subrazas_list = [];
                    foreach ($subrazas as $subraza) {
                        $name = Subraza::find($subraza)->nombre;
                        array_push($subrazas_list, $name);
                    }

                    $subrazas_result = implode(', ', $subrazas_list);
                    $result[$field] = $subrazas_result;
                }
            } elseif ($field == 'rasgos') {
                $rasgos = json_decode($raza[$field]);
                $rasgos_list = [];
                foreach ($rasgos as $rasgo) {
                    $rasgo_racial = RasgoRacial::find($rasgo)->nombre;
                    array_push($rasgos_list, $rasgo_racial);
                }

                $rasgos_result = implode(', ', $rasgos_list);
                $result[$field] = $rasgos_result;
            } else {
                $result[$field] = $raza->$field;
            }

        }

        return $result;

    }
}
