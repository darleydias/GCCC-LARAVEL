<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos',function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('operacao_atual');
            $table->integer('finalizado');
            $table->string('nr_sei')->nullable();
            $table->string('nr_PAAF_NF')->nullable();
            $table->string('ativo');
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
        Schema::drop('processos');
    }
}
