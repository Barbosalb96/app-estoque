<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('name', 50);
            $table->string('logradouro', 100);
            $table->integer('number')->nullable();
            $table->string('bairro', 20);
            $table->string('estado', 20);
            $table->string('telefone', 20);
            $table->string('cpf', 50)->unique();
            $table->string('rg', 50)->unique();
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
        Schema::dropIfExists('clientes');
    }
}
