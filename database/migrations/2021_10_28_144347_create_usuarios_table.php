<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('name',256);
            $table->string('email',256);
            $table->string('cpf',128);
            $table->string('modalidade',128);
            $table->string('professor',256);
            $table->string('rua',128);
            $table->string('bairro',128);
            $table->string('cep');
            $table->integer('numero');
            $table->string('cidade',128);
            $table->string('estado',128);
            $table->string('cadastrante',256);

            //chaves estrangeiras
            //$table->foreignId('professors_id')->constrained('professors');
            //$table->foreignId('modalidade_id')->constrained('modalidades');

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
        Schema::dropIfExists('usuarios');
    }
}
