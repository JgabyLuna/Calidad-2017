<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilePermiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('perfile_permiso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_perfile')->unsigned();
            $table->foreign('id_perfile')->references('id')->on('perfiles');
            $table->integer('id_permiso')->unsigned();
            $table->foreign('id_permiso')->references('id')->on('permisos');
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
