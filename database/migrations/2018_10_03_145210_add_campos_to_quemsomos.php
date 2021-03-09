<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposToQuemsomos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('quemsomos', function (Blueprint $table) {
        $table->string('missao', 500)->nullable();
        $table->string('visao', 500)->nullable();
        $table->string('valores', 500)->nullable();
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
