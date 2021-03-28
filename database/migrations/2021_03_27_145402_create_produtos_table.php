<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome', 50);
            $table->string('marca', 500);
            $table->string('categoria', 50);
            $table->string('descricao', 500);
            $table->integer('quantidade')->length(50);
            $table->double('custoMedio', 10, 2)->nullable();
            $table->double('valorTotal', 10, 2)->nullable();
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
        Schema::dropIfExists('produtos');
    }
}
