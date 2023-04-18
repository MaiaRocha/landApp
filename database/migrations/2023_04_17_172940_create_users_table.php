<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nome do Usuário');
            $table->string('email')->comment('Email do Usuário');
            $table->string('password')->comment('Senha do Usuário');
            $table->string('cpf')->comment('Cpf do Usuário');
            $table->date('birthday')->comment('Aniversário do Usuário');
            $table->string('telephone')->comment('Telefone do Usuário');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
