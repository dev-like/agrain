<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagemToQuemsomos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('quemsomos', function (Blueprint $table) {
        $table->string('imagem1', 255);
        $table->string('imagem2', 255);

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('quemsomos', function (Blueprint $table) {
        $table->dropColumn('quemsomos');
    });
    }
}
