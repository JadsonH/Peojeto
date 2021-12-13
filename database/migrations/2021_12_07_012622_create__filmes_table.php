<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->default('');
            $table->string('ano')->default('');
            $table->string('pais', 100 )->default('');
            $table->string('genero', 100 )->default('');
            $table->string('diretor', 200)->default('');
            $table->string('faixa_etaria')->default('');
            $table->string('atores', 1000)->default('');
            $table->string('sinopse', 1000000)->default('');
            $table->string('critica', 100000000)->default('');

            $table->unsignedBigInteger('user_id')
            ->nullable();//permitir valor nulo

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

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
        Schema::dropIfExists('filmes');
    }
}
