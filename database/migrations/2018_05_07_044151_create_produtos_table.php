<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nome', 255);
            $table->text('descricao')->nullable();
            $table->integer('linha_id')->unsigned();
            $table->text('indicacoes', 500)->nullable();
            $table->text('mododeusar', 500)->nullable();
            $table->string('slug');
            $table->string('imagem', 1000);
            $table->string('informacoesnutricionais', 1000)->nullable();

            $table->string('idioma', 04)->nullable();
            $table->timestamps();
            $table->softDeletes();

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
