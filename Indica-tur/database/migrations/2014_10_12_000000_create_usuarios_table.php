<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('nome_usuario');
            $table->string('senha_usuario');
            $table->integer('cpf_usuario');
            $table->string('telefone_usuario');
            $table->string('email_usuario')->unique();
            $table->timestamp('email_verified_at')->nullable();            
            $table->integer('pontuacao_usuario');
            $table->unsignedInteger('indicados');
            $table->foreign('indicados')->references('id')->on('indicado'); 
            $table->rememberToken();
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
        Schema::dropIfExists('usuario');
    }
}
