<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filamentos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('filamento_id');
            $table->float('valor');
            $table->integer('material_id')->unsigned();
            $table->integer('cores_id')->unsigned();
            $table->integer('fornecedor_id')->unsigned();
            $table->float('peso');
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
        Schema::dropIfExists('filamentos');
    }
}
