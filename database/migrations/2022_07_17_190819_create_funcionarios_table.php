<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('endereco');
            $table->string('numeroBilhete');
            $table->string('genero')->nullable();
            $table->string('dataNascimento');
            $table->string('nacionalidade');
            $table->string('telefone');
            $table->string('telemovel');
            $table->string('emailPrincipal');
            $table->string('emailSecundario');
            $table->string('estadoCivil');
            $table->string('habilitacao');
            $table->string('numeroAgente');
            $table->string('municipio');
            $table->string('utilizador');
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
        Schema::dropIfExists('funcionarios');
    }
}
