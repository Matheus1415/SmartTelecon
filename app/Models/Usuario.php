<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'nome',
        'email',
        'telefone',
        'senha',
        'senhaComfirmada',
        'empresa',
        'cnpj',
        'endereco',
        'cidade',
        'estado',
        'cep',
    ];

    public function planos() {
        return $this->hasMany(Planos::class);
    }

    
}
