<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function provedor() {
        return $this->hasOne(Provedor::class);;
    }

}
