<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdProcesoTipoToProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('procesos', function (Blueprint $table) {
            $table->integer('id_procesoTipo')->unsigned();
            $table->foreign('id_procesoTipo')->references('id')->on('procesoTipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('procesos', function (Blueprint $table) {
            $table->dropColumn('id_procesoTipo');
            $table->dropColumn('id_procesoTipo');
        });
    }
}
