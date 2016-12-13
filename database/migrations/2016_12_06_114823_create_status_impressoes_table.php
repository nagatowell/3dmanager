<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\StatusImpressao;
class CreateStatusImpressoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_impressoes', function (Blueprint $table) {
            $table->increments('status_imp_id');
            $table->string('nome_status');
            $table->string('descricao_status')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps();
        });
        StatusImpressao::create(['nome_status' =>'Sucesso', 'user_id' => 1]);
        StatusImpressao::create(['nome_status' =>'Falha', 'user_id' => 1]);
        StatusImpressao::create(['nome_status' =>'Falha de Energia', 'user_id' => 1]);
        StatusImpressao::create(['nome_status' =>'Cancelada', 'user_id' => 1]);
        StatusImpressao::create(['nome_status' =>'Mesa Desalinhada', 'user_id' => 1]);
        StatusImpressao::create(['nome_status' =>'Filamento travou no bico', 'user_id' => 1]);
        StatusImpressao::create(['nome_status' =>'Soltou da Mesa', 'user_id' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_impressoes');
    }
}
