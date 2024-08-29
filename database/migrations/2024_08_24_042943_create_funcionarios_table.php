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
            $table->string("nome")->nullable();
            $table->string("sobrenome")->nullable();
            $table->date("data")->nullable();
            $table->string("genero")->nullable();
            $table->string("cargo")->nullable();
            $table->string("email")->nullable();
            $table->string("senha")->nullable();
            $table->integer("telefone")->nullable();
            $table->string("nacionalidade")->nullable();
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
