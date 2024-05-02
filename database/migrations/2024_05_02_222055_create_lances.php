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
        Schema::create('lances', function (Blueprint $table) {
            $table->id();
            $table->double('valor_compra_produto');
            $table->string('link_compra_produto');
            $table->double('porcentagem_ganho');
            $table->boolean('lance_por_porcentagem_ganho');
            $table->integer('faltando_quantos_segundos');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('licitacoes_id');
            $table->timestamps();
            
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('licitacoes_id')->references('id')->on('licitacoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lances');
    }
};
