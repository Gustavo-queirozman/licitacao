<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('licitacoes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_licitacao');
            $table->string('titulo',255);
            $table->string('descricao',255);
            $table->string('estado');
            $table->string('cidade');
            $table->string('url_licitacao');
            $table->boolean('visivel');
            $table->unsignedBigInteger('portais_id');
            $table->timestamps();

            $table->foreign('portais_id')->references('id')->on('portais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licitacoes');
    }
};
