<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpressoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impressoes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('impressao_id');
            $table->float('camada_impressao');
            $table->integer('infill');
            $table->boolean('suporte');
            $table->float('peso_impressao');
            $table->string('tempo_impressao');
            $table->integer('peca_id')->unsigned();
            $table->boolean('sucesso');
            $table->integer('filamento_id')->unsigned();
            $table->integer('pedido_id')->unsigned();
            $table->integer('quant_impressao');
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
        Schema::dropIfExists('impressoes');
    }
}
