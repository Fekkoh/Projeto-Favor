<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favor__pedidos', function (Blueprint $table) {
            $table->id('id_favor_pedido');
            $table->string('nome_area');
            $table->string('titulo');
            $table->string('descricao');
            $table->date('data');
            $table->time('hora');
            $table->tinyint('finalizado');
            $table->id('area_id_area');
            $table->id('user_id_user_pediu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favor__pedidos');
    }
};
