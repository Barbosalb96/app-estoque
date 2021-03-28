<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome',50);
            $table->string('cnpj')->unique();
            $table->string('endereco',30);
            $table->string('logradouro',30);
            $table->string('bairro',15);
            $table->string('cidade',15);
            $table->string('estado',10);
            $table->string('telefone',15);
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
        Schema::dropIfExists('fornecedores');
    }
}
