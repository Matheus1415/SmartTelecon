<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->default('admin');
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('senha');
            $table->string('senha_confirmada')->nullable();
            // Campos opcionais
            $table->string('empresa')->default('')->nullable();
            $table->string('cnpj')->default('')->nullable();
            $table->string('endereco')->default('')->nullable();
            $table->string('cidade')->default('')->nullable();
            $table->string('estado')->default('')->nullable();
            $table->string('cep')->default('')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
