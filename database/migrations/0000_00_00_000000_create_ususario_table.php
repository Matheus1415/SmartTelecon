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
            $table->foreignId('planos_user_id')->nullable()->constrained('planos')->onDelete('cascade');
            $table->string('empresa')->default('')->nullable();
            $table->string('cnpj')->default('')->nullable();
            $table->string('endereco')->default('')->nullable();
            $table->string('cidade')->default('')->nullable();
            $table->string('estado')->default('')->nullable();
            $table->string('cep')->default('')->nullable();
            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('sessions');
    }
};
