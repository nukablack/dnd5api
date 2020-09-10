<?php

namespace App\Http\Controllers;

use App\AscendenciaDraconica;

class AscendenciaDraconicaController extends Controller
{

    public function index(){
        $fields = ['id', 'dragon', 'daño', 'aliento'];
        $ascendencias = AscendenciaDraconica::all();

        $result = [];

        foreach ($ascendencias as $ascendencia) {
            $newElement = [];
            foreach ($fields as $field) {
                $newElement[$field] = $ascendencia->$field;
            }

            array_push($result, $newElement);
        }

        return $result;
    }

    public function show($id){
        $result = [];
        $fields = ['id', 'dragon', 'daño', 'aliento'];

        $ascendencia = AscendenciaDraconica::find($id);

        foreach ($fields as $field){
            $result[$field] = $ascendencia->$field;
        }

        return $result;

    }
}
