<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planos extends Model
{
    use HasFactory;
    protected $fillable = [
        'planos_user_id',
        'nome',
        'preco',
        'tempo_fidelidade_meses',
        'taxa_cancelamento',
        'tipo_conexao',
        'velocidade_download',
        'velocidade_upload',
        'instalacao_inclusa',
        'descricao_geral',
        'disponibilidade_geografica',
        'limite_dados',
        'equipamentos_fornecidos',
        'upgrade_downgrade_disponivel',
        'politica_garantia_velocidade',
        'ofertas_especiais',
        'opcoes_pagamento',
        'suporte_cliente',
    ];
    
    
}
