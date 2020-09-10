<?php

namespace App\Http\Controllers;

use App\Caracteristica;
use App\RasgoRacial;
use App\Subraza;

class SubrazaController extends Controller
{

    public function index()
    {
        $fields = ['id', 'nombre', 'incremento', 'rasgos'];
        $subrazas = Subraza::all();

        $result = [];

        foreach ($subrazas as $subraza) {
            $newElement = [];
            foreach ($fields as $field) {
                if ($field == 'incremento') {
                    $incremento = json_decode($subraza[$field]);
                    $incremento = '+' . $incremento[1] . ' ' . Caracteristica::find($incremento[0])->nombre;
                    $newElement[$field] = $incremento;
                } elseif ($field == 'rasgos') {
                    $rasgos = json_decode($subraza[$field]);
                    $rasgos_list = [];
                    foreach ($rasgos as $rasgo) {
                        $rasgo_racial = RasgoRacial::find($rasgo)->nombre;
                        array_push($rasgos_list, $rasgo_racial);
                    }

                    $rasgos_result = implode(', ', $rasgos_list);
                    $newElement[$field] = $rasgos_result;
                } else {
                    $newElement[$field] = $subraza->$field;
                }

            }

            array_push($result, $newElement);
        }

        return $result;
    }

    public function show($id)
    {
        $result = [];
        $fields = ['id', 'nombre', 'incremento', 'rasgos'];

        $subraza = Subraza::find($id);

        foreach ($fields as $field) {
            if ($field == 'incremento') {
                $incremento = json_decode($subraza[$field]);
                $incremento = '+' . $incremento[1] . ' ' . Caracteristica::find($incremento[0])->nombre;
                $result[$field] = $incremento;
            } elseif ($field == 'rasgos') {
                $rasgos = json_decode($subraza[$field]);
                $rasgos_list = [];
                foreach ($rasgos as $rasgo) {
                    $rasgo_racial = RasgoRacial::find($rasgo)->nombre;
                    array_push($rasgos_list, $rasgo_racial);
                }

                $rasgos_result = implode(', ', $rasgos_list);
                $result[$field] = $rasgos_result;
            } else {
                $result[$field] = $subraza->$field;
            }

        }

        return $result;

    }
}
