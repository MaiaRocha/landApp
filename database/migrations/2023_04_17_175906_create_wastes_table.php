<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wastes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('construction_id')->comment('Chave estrangeira de relacionamento da obra');
            $table->foreign('construction_id')->references('id')->on('constructions');
            $table->string('name')->comment('Nome do resíduo');
            $table->float('amount', 10,2)->comment('Quantidade do resíduo em quilos');
            $table->string('description')->comment('Descrição do resíduo');
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
        Schema::dropIfExists('wastes');
    }
}
