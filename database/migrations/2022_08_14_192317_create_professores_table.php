<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('nascimento');
            $table->string('estadoCivil');
            $table->string('habilitacao');
            $table->string('endereco');
            $table->string('telefonePrimario');
            $table->string('telefoneSecundario');
            $table->string('genero');
            $table->string('nacionalidade');
            $table->string('email');
            $table->string('emailSecundario');
            $table->string('numeroBilhete');
            $table->string('numeroAgente');
            $table->string('municipio');
            $table->string('disciplina');
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
        Schema::dropIfExists('professores');
    }
}
