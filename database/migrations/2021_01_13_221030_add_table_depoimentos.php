<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableDepoimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('depoimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',150);
            $table->string('texto',500);
            $table->string('imagem',100);
            $table->string('descricao',150);


            $table->softDeletes();
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
        Schema::dropIfExists('depoimentos');
    }
}
