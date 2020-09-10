<?php

namespace App\Http\Controllers;

use App\Clase;

class ClaseController extends Controller
{

    public function index(){
        $fields = ['id', 'nombre', 'descript', 'dado_golpe', 'caract_primaria', 'competencia_salvacion', 'compe_armas_armaduras'];
        $clases = Clase::all();

        $result = [];

        foreach ($clases as $clase) {
            $newElement = [];
            foreach ($fields as $field) {
                $newElement[$field] = $clase->$field;
            }

            array_push($result, $newElement);
        }

        return $result;
    }

    public function show($id){
        $result = [];
        $fields = ['id', 'nombre', 'descript', 'dado_golpe', 'caract_primaria', 'competencia_salvacion', 'compe_armas_armaduras'];

        $clase = Clase::find($id);

        foreach ($fields as $field){
            $result[$field] = $clase->$field;
        }

        return $result;

    }
}
