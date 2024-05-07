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
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('preco', 8, 2); 
            $table->integer('tempo_fidelidade_meses');
            $table->decimal('taxa_cancelamento', 8, 2)->nullable();
            $table->string('tipo_conexao');
            $table->integer('velocidade_download');
            $table->integer('velocidade_upload');
            $table->boolean('instalacao_inclusa');
            $table->text('descricao_geral')->nullable();
            $table->string('disponibilidade_geografica')->nullable();
            $table->integer('limite_dados')->nullable();
            $table->string('equipamentos_fornecidos')->nullable();
            $table->boolean('upgrade_downgrade_disponivel')->default(false);
            $table->text('politica_garantia_velocidade')->nullable();
            $table->text('ofertas_especiais')->nullable();
            $table->text('opcoes_pagamento')->nullable();
            $table->text('suporte_cliente')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planos_');
    }
};
