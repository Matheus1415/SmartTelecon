<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'cnpj',
        'telefone',
        'endereco',
        'cidade',
        'estado',
        'cep',
        'senha',
        'senhaComfirmada',
    ];}
