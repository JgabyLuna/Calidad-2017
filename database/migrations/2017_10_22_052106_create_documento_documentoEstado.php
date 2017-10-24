<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoDocumentoEstado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('documento_documentoEstado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_documento')->unsigned();
            $table->foreign('id_documento')->references('id')->on('documentos');
            $table->integer('id_documentoEstado')->unsigned();
            $table->foreign('id_documentoEstado')->references('id')->on('documentoEstados');
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
        //
    }
}
