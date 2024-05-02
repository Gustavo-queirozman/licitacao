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
        Schema::create('anexos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_anexo');
            $table->unsignedBigInteger('licitacoes_id');
            $table->timestamps();

            $table->foreign('licitacoes_id')->references('id')->on('licitacoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anexos');
    }
};
