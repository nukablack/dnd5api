<?php

use Illuminate\Database\Seeder;
use App\AscendenciaDraconica;

class AscendenciaDraconicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AscendenciaDraconica::create([
           'dragon' => 'Azul',
           'daño' => 'Relámpago',
           'aliento' => 'Línea 5x30 pies (salvación Des.)',
        ]);

        AscendenciaDraconica::create([
           'dragon' => 'Blanco',
           'daño' => 'Frío',
           'aliento' => 'Cono 15 pies (salvación Con.)',
        ]);

        AscendenciaDraconica::create([
           'dragon' => 'Bronce',
           'daño' => 'Relámpago',
           'aliento' => 'Línea 5x30 pies (salvación Des.)',
        ]);

        AscendenciaDraconica::create([
           'dragon' => 'Cobre',
           'daño' => 'Ácido',
           'aliento' => 'Línea 5x30 pies (salvación Des.)',
        ]);

        AscendenciaDraconica::create([
           'dragon' => 'Latón',
           'daño' => 'Fuego',
           'aliento' => 'Línea 5x30 pies (salvación Des.)',
        ]);

        AscendenciaDraconica::create([
           'dragon' => 'Negro',
           'daño' => 'Ácido',
           'aliento' => 'Línea 5x30 pies (salvación Des.)',
        ]);

        AscendenciaDraconica::create([
           'dragon' => 'Oro',
           'daño' => 'Fuego',
           'aliento' => 'Cono 15 pies (salvación Des.)',
        ]);

        AscendenciaDraconica::create([
           'dragon' => 'Plata',
           'daño' => 'Frío',
           'aliento' => 'Cono 15 pies (salvación Con.)',
        ]);

        AscendenciaDraconica::create([
           'dragon' => 'Rojo',
           'daño' => 'Fuego',
           'aliento' => 'Cono 15 pies (salvación Des.)',
        ]);

        AscendenciaDraconica::create([
           'dragon' => 'Verde',
           'daño' => 'Veneno',
           'aliento' => 'Cono 15 pies (salvación Con.)',
        ]);
    }
}
