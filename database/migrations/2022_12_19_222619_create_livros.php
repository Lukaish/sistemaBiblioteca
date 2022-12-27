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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('dataPublicacao');
            $table->string('genero');
            $table->float('valor');
            $table->unsignedBigInteger('id_estante');
            $table->foreign('id_estante')->references('id')
                ->on('estante')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_autor');
            $table->foreign('id_autor')->references('id')
                ->on('autor')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_editora');
            $table->foreign('id_editora')->references('id')
                ->on('editora')->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('livros');
    }
};
