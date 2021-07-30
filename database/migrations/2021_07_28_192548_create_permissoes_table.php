<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('possiveisProprietarios_id');
            $table->integer('tipoTarefa_id');
            $table->foreign('possiveisProprietarios_id')->references('id')->on('possiveis_proprietarios');
            $table->foreign('tipoTarefa_id')->references('id')->on('tipoTarefa');
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
        Schema::dropIfExists('permissoes');
    }
}
