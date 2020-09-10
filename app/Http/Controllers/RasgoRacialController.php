<?php

namespace App\Http\Controllers;

use App\RasgoRacial;

class RasgoRacialController extends Controller
{

    public function index(){
        $fields = ['id', 'nombre', 'descript'];
        $rasgos = RasgoRacial::all();

        $result = [];

        foreach ($rasgos as $rasgo) {
            $newElement = [];
            foreach ($fields as $field) {
                $newElement[$field] = $rasgo->$field;
            }

            array_push($result, $newElement);
        }

        return $result;
    }

    public function show($id){
        $result = [];
        $fields = ['id', 'nombre', 'descript'];

        $rasgo = RasgoRacial::find($id);

        foreach ($fields as $field){
            $result[$field] = $rasgo->$field;
        }

        return $result;

    }
}
