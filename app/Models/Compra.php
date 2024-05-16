<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'referencia_user',
        'idPlanosCompra',
        'emailComprador',
        'nomeComprador',
        'numeroCartao',
        'valor',
        'vencimentoCartao',
        'codigoCartao',
    ];

    public function planos() {
        return $this->belongsTo('App\Models\Planos', 'idPlanosCompra', 'id');
    }
}
