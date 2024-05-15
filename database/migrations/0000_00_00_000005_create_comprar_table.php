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
            //Referencia de pLano de user
            $table->string('referencia_user');
            $table->foreignId('idPlanosCompra')->nullable()->constrained('planos')->onDelete('cascade');
            // Dados Comprador
            $table->string('emailComprador');
            $table->string('nomeComprador');
            //dados do cartão
            $table->string('numeroCartao');
            $table->decimal('valor', 10, 2);
            $table->string('vencimentoCartao');
            $table->string('codegoCartao');

            $table->timestamps();
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
