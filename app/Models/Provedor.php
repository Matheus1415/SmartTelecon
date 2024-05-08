<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Provedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'empresa',
        'cnpj',
        'endereco',
        'cidade',
        'estado',
        'cep',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function Planos(){
        return $this->hasMany(Planos::class);
    }

}
