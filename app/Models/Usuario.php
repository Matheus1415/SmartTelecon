<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
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
}
