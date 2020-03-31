<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contratos', function (Blueprint $table) {
            $table->id();
            $table->string('dtAprovação');
            $table->string('skCliente');
            $table->string('Categoria');
            $table->string('Descrição');
            $table->string('skGerente');
            $table->string('Segmento');
            $table->string('skTipoProposta');
            $table->string('skGrupo');
            $table->string('Regional');
            $table->string('Validade');
            $table->string('ValorAprovado');
            $table->string('Limite_Utilizado');
            $table->string('Probabilidade_Saque');
            $table->string('Previsão_Saque');
            $table->string('Observações');
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
        Schema::dropIfExists('contratos');
    }
}
