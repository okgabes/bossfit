<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->string('name',256);
            $table->string('email',256);
            $table->string('cpf',128);
            $table->string('rua',128);
            $table->string('bairro',128);
            $table->string('cep');
            $table->integer('numero');
            $table->string('cidade',128);
            $table->string('estado',128);
            $table->string('turno',128);
            $table->string('cadastrante',256);
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
        Schema::dropIfExists('professors');
    }
}
