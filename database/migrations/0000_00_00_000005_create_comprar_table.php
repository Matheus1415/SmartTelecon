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
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            // Adicione suas colunas necessárias aqui
            $table->unsignedBigInteger('plano_id_comprado');
            $table->unsignedBigInteger('compraid_user');
            $table->decimal('valor', 10, 2);
            $table->timestamps();
            $table->string('referencia_user');
        
            // Definindo as chaves estrangeiras
            $table->foreign('plano_id_comprado')->references('id')->on('planos')->onDelete('cascade');
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprar');
    }
};
