<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nome');
            $table->string('email');
            $table->integer('estabelecimento_id')->unsigned();
        });
        
     Schema::table('clientes', function($table) {
            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
