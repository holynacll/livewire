<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemessasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remessas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->foreignId('tipo_remessa_id')->references('id')->on('tipo_remessa');
            $table->foreignId('instituicao_id')->references('id')->on('instituicoes');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->date('data_envio');
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
        Schema::dropIfExists('remessas');
    }
}
