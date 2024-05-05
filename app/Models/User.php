<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Provedor;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'tipo',
        'nome',
        'email',
        'telefone',
        'senha',
        'senhaComfirmada'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $password = 'senha';  

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function provedor() {
        return $this->hasOneThrough(Provedor::class, 'App\Models\Provedor');
    }
}
