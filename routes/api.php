<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Caracteristica;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//CARACTERÍSTICAS

Route::get('/caracteristicas', 'CaracteristicaController@index');
Route::get('/caracteristicas/{id}', 'CaracteristicaController@show');

//RASGOS

Route::get('/rasgos-raciales', 'RasgoRacialController@index');
Route::get('/rasgos-raciales/{id}', 'RasgoRacialController@show');

//SUBRAZAS

Route::get('/subrazas', 'SubrazaController@index');
Route::get('/subrazas/{id}', 'SubrazaController@show');

//RAZAS

Route::get('/razas', 'RazaController@index');
Route::get('/razas/{id}', 'RazaController@show');

//ASCENDENCIA DRACÓNICA

Route::get('/ascendencia-draconica', 'AscendenciaDraconicaController@index');
Route::get('/ascendencia-draconica/{id}', 'AscendenciaDraconicaController@show');

//CLASES

Route::get('/clases', 'ClaseController@index');
Route::get('/clases/{id}', 'ClaseController@show');
