<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('Chave estrangeira de relacionamento do usuário');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name')->comment('Nome da obra');
            $table->float('land_size', 8,2)->comment('Tamanho do terreno');
            $table->float('budget', 10,2)->comment('Orçamento da obra');
            $table->string('description')->comment('Descrição da obra');

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
        Schema::dropIfExists('constructions');
    }
}
