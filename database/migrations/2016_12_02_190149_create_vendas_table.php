<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('vendas_id');
            $table->integer('user_id')->unsigned();
            $table->float('valor_venda')->nullable();
            $table->string('data_venda')->nullable();
            $table->string('data_postagem')->nullable();
            $table->float('valor_frete')->nullable();
            $table->string('cep_frete')->nullable();
            $table->integer('pedidos_id')->unsigned();
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
        Schema::dropIfExists('vendas');
    }
}
