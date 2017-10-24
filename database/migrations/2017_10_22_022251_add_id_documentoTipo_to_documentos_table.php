<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdDocumentoTipoToDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documentos', function (Blueprint $table) {
            $table->integer('id_documentoTipo')->unsigned();
            $table->foreign('id_documentoTipo')->references('id')->on('documentoTipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documentos', function (Blueprint $table) {
            $table->dropColumn('id_documentoTipo');
            $table->dropColumn('id_documentoTipo');
        });
    }
}
