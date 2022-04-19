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
        Schema::create('favor__concedidos', function (Blueprint $table) {
            $table->id('id_favor_concedido');
            $table->id('favor_pedido_id_favor_pedido');
            $table->id('user_id_user_concedeu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favor__concedidos');
    }
};
