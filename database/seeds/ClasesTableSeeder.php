<?php

use Illuminate\Database\Seeder;
use App\Clase;

class ClasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clase::create([
            'nombre' => 'Bárbaro',
            'descript' => 'Un feroz guerrero de trasfondo primitivo que puede entrar en una furia de batalla.',
            'dado_golpe' => 'd12',
            'caract_primaria' => 'Fuerza',
            'competencia_salvacion' => 'Fuerza y Constitución',
            'compe_armas_armaduras' => 'Armadura ligera y mediana, escudos, armas simples y marciales.'
        ]);

        Clase::create([
            'nombre' => 'Bardo',
            'descript' => 'Un mago inspirador cuyo poder replica la música de la creación.',
            'dado_golpe' => 'd8',
            'caract_primaria' => 'Carisma',
            'competencia_salvacion' => 'Destreza y Carisma',
            'compe_armas_armaduras' => 'Armadura ligera, armas simples, ballestas de mano, espadas largas, estoques, espadas cortas.'
        ]);

        Clase::create([
            'nombre' => 'Brujo',
            'descript' => 'Un practicante de la magia que deriva de un contrato con una entidad extraplanaria.',
            'dado_golpe' => 'd8',
            'caract_primaria' => 'Carisma',
            'competencia_salvacion' => 'Sabiduría y Carisma',
            'compe_armas_armaduras' => 'Armadura ligera, armas simples.'
        ]);

        Clase::create([
            'nombre' => 'Clérigo',
            'descript' => 'Un campeón sacerdotal que esgrime magia divina al servicio de un poder mayor.',
            'dado_golpe' => 'd8',
            'caract_primaria' => 'Sabiduría',
            'competencia_salvacion' => 'Sabiduría y Carisma',
            'compe_armas_armaduras' => 'Armadura ligera y mediana, escudos, armas simples.'
        ]);

        Clase::create([
            'nombre' => 'Druida',
            'descript' => 'Un sacerdote de la Antigua Fe, que blande los poderes de la naturaleza —la luz de la Luna y el rayo— y que adopta formas animales.',
            'dado_golpe' => 'd8',
            'caract_primaria' => 'Sabiduría',
            'competencia_salvacion' => 'Inteligencia y Sabiduría',
            'compe_armas_armaduras' => 'Armadura ligera y mediana (no de metal), escudos (no de metal), clavas, dagas, dardos, jabalinas, mazas, bastones, cimitarras, hoces, hondas, lanzas.'
        ]);

        Clase::create([
            'nombre' => 'Explorador',
            'descript' => 'Un guerrero que usa la proeza marcial y la magia de la naturaleza para combatir las amenazas en los límites de la civilización.',
            'dado_golpe' => 'd10',
            'caract_primaria' => 'Destreza y Sabiduría',
            'competencia_salvacion' => 'Fuerza y Destreza',
            'compe_armas_armaduras' => 'Armadura ligera y mediana, escudos, armas simples y marciales.'
        ]);

        Clase::create([
            'nombre' => 'Guerrero',
            'descript' => 'Un maestro del combate marcial, competente con una gran variedad de armas y armaduras.',
            'dado_golpe' => 'd10',
            'caract_primaria' => 'Fuerza o Destreza',
            'competencia_salvacion' => 'Fuerza y Constitución',
            'compe_armas_armaduras' => 'Todas las amaduras, escudos, armas simples y marciales.'
        ]);

        Clase::create([
            'nombre' => 'Hechicero',
            'descript' => 'Un lanzador de conjuros que recurre a la magia inherente de un don o una línea de sangre.',
            'dado_golpe' => 'd6',
            'caract_primaria' => 'Carisma',
            'competencia_salvacion' => 'Constitución y Carisma',
            'compe_armas_armaduras' => 'Dagas, dardos, hondas, bastones, ballestas ligeras.'
        ]);

        Clase::create([
            'nombre' => 'Mago',
            'descript' => 'Un usuario de magia educado capaz de manipular la estructura de la realidad',
            'dado_golpe' => 'd6',
            'caract_primaria' => 'Inteligencia',
            'competencia_salvacion' => 'Inteligencia y Sabiduría',
            'compe_armas_armaduras' => 'Dagas, dardos, hondas, bastones, ballestas ligeras.'
        ]);

        Clase::create([
            'nombre' => 'Monje',
            'descript' => 'Un maestro de las artes marciales, que domina el poder del cuerpo en busca de la perfección física y espiritual.',
            'dado_golpe' => 'd8',
            'caract_primaria' => 'Destreza y Sabiduría',
            'competencia_salvacion' => 'Fuerza y Destreza',
            'compe_armas_armaduras' => 'Armas simples, espadas cortas.'
        ]);

        Clase::create([
            'nombre' => 'Paladín',
            'descript' => 'Un guerrero santo atado a un juramento sagrado.',
            'dado_golpe' => 'd10',
            'caract_primaria' => 'Fuerza y Carisma',
            'competencia_salvacion' => 'Sabiduría y Carisma',
            'compe_armas_armaduras' => 'Todas las amaduras, escudos, armas simples y marciales.'
        ]);

        Clase::create([
            'nombre' => 'Pícaro',
            'descript' => 'Un rufián que usa sigilo y astucia para superar obstáculos y enemigos.',
            'dado_golpe' => 'd8',
            'caract_primaria' => 'Destreza',
            'competencia_salvacion' => 'Destreza y Inteligencia',
            'compe_armas_armaduras' => 'Armadura ligera, armas simples, ballestas de mano, espadas largas, estoques, espadas cortas.'
        ]);

    }
}
