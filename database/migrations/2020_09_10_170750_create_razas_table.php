<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('incremento');
            $table->integer('edad_adulta');
            $table->integer('edad_max');
            $table->string('alineamiento');
            $table->string('tamaño');
            $table->integer('velocidad');
            $table->text('subrazas')->nullable();
            $table->string('idiomas');
            $table->text('rasgos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('razas');
    }
}
