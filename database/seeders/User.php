<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'tipo' => 'admin',
            'nome' => 'Otavio',
            'email' => 'admin1@example.com',
            'telefone' => '123456789',
            'senha' => Hash::make('Otavio12345$'),
            'provedor_id' => null,
        ]);

        User::create([
            'tipo' => 'admin',
            'nome' => 'Wesley',
            'email' => 'admin2@example.com',
            'telefone' => '123456789',
            'senha' => Hash::make('Wesley12345$'),
            'provedor_id' => null,
        ]);

        User::create([
            'tipo' => 'admin',
            'nome' => 'Matheus',
            'email' => 'madara@gmail.com',
            'telefone' => '123456789',
            'senha' => Hash::make('Madara12345$'),
            'provedor_id' => null,
        ]);

        User::create([
            'tipo' => 'provedor',
            'nome' => 'Ermenson Rodrigues',
            'email' => 'provedor1@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('BrizaNet12345$'),
            'provedor_id' => 1,
        ]);

        User::create([
            'tipo' => 'provedor',
            'nome' => 'Edivaldo Costa',
            'email' => 'provedor2@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('Claro12345$'),
            'provedor_id' => 2, 
        ]);

        User::create([
            'tipo' => 'provedor',
            'nome' => 'Juan Tylor',
            'email' => 'provedor2@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('VivaFibra12345$'),
            'provedor_id' => 2, 
        ]);

        User::create([
            'tipo' => 'provedor',
            'nome' => 'Antonio Marcos',
            'email' => 'provedor2@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('InforNet12345$'),
            'provedor_id' => 3,
        ]);

        User::create([
            'tipo' => 'provedor',
            'nome' => 'Carlos Drumon',
            'email' => 'provedor2@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('Moob12345$'),
            'provedor_id' => 4, 
        ]);

    }
}
