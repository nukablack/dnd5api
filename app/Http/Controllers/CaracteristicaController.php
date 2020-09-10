<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caracteristica;

class CaracteristicaController extends Controller
{

    public function index(){
        $fields = ['id', 'nombre'];
        $caracteristicas = Caracteristica::all();

        $result = [];

        foreach ($caracteristicas as $caracteristica) {
            $newElement = [];
            foreach ($fields as $field) {
                $newElement[$field] = $caracteristica->$field;
            }

            array_push($result, $newElement);
        }

        return $result;
    }

    public function show($id){
        $result = [];
        $fields = ['id', 'nombre'];

        $caracteristica = Caracteristica::find($id);

        foreach ($fields as $field){
            $result[$field] = $caracteristica->$field;
        }

        return $result;

    }
}
