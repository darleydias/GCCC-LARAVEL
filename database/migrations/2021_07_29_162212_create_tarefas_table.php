<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('solicitacao')->nullable();
            $table->json('quesitos')->nullable();
            $table->integer('processo_id');
            $table->integer('tipoTarefa_id');
            $table->foreign('processo_id')->references('id')->on('processos');
            $table->foreign('tipoTarefa_id')->references('id')->on('tipo_tarefas');
            $table->string('ativo')->default('1');
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
        Schema::dropIfExists('tarefas');
    }
}
