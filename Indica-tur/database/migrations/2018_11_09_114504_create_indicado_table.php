<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateIndicadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_indicado');
            $table->integer('cpf_indicado');
            $table->string('telefone_indicado');
            $table->string('email_indicado');
            $table->timestamps();
            $table->unsignedInteger('indicado_por_id');
            $table->foreign('indicado_por_id')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicado');
    }
}
