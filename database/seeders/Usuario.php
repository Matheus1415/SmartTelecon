<?php

namespace Database\Seeders;

use App\Models\Usuario as ModelsUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Usuario extends Seeder
{

    public function run(): void
    {
        ModelsUsuario::create([
            'tipo' => 'admin',
            'nome' => 'Otavio',
            'email' => 'otavio@example.com',
            'telefone' => '123456789',
            'senha' => Hash::make('Otavio12345$'),
            'provedor_id' => null,
        ]);

        ModelsUsuario::create([
            'tipo' => 'admin',
            'nome' => 'Wesley',
            'email' => 'wesley@example.com',
            'telefone' => '123456789',
            'senha' => Hash::make('Wesley12345$'),
            'provedor_id' => null,
        ]);

        ModelsUsuario::create([
            'tipo' => 'admin',
            'nome' => 'Matheus',
            'email' => 'madara@gmail.com',
            'telefone' => '123456789',
            'senha' => Hash::make('Madara12345$'),
            'provedor_id' => null,
        ]);

        ModelsUsuario::create([
            'tipo' => 'provedor',
            'nome' => 'Ermenson Rodrigues',
            'email' => 'ermeson@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('BrizaNet12345$'),
            'empresa' => 'TechNet Solutions',
            'cnpj' => '12.345.678/0001-01',
            'endereco' => 'Rua das Inovações, 123',
            'cidade' => 'Tecnópolis',
            'estado' => 'Tecnofornia',
            'cep' => '12345-678',
        ]);

        ModelsUsuario::create([
            'tipo' => 'provedor',
            'nome' => 'Edivaldo Costa',
            'email' => 'edivaldo@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('Claro12345$'),
            'empresa' => 'BitStream Telecom',
            'cnpj' => '98.765.432/0001-09',
            'endereco' => 'Avenida da Velocidade, 456',
            'cidade' => 'Fibralândia',
            'estado' => 'Netrópolis',
            'cep' => '98765-432',
        ]);

        ModelsUsuario::create([
            'tipo' => 'provedor',
            'nome' => 'Juan Tylor',
            'email' => 'juantylor@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('VivaFibra12345$'),
            'empresa' => 'Conexão Veloz',
            'cnpj' => '11.223.344/0001-02',
            'endereco' => 'Rua dos Downloads, 789',
            'cidade' => 'Conectópolis',
            'estado' => 'Conectolândia',
            'cep' => '11223-344',
        ]);

        ModelsUsuario::create([
            'tipo' => 'provedor',
            'nome' => 'Antonio Marcos',
            'email' => 'antoniomarcos@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('InforNet12345$'),
            'empresa' => 'MegaLink Telecom',
            'cnpj' => '44.555.666/0001-03',
            'endereco' => 'Avenida das Conexões, 987',
            'cidade' => 'Megaville',
            'estado' => 'Megalândia',
            'cep' => '44556-666',
        ]);

        ModelsUsuario::create([
            'tipo' => 'provedor',
            'nome' => 'Carlos Drumon',
            'email' => 'carlosdrumon@example.com',
            'telefone' => '987654321',
            'senha' => Hash::make('Moob12345$'),
            'empresa' => 'Drumon Tele Comunicação',
            'cnpj' => '23.568.666/0341-03',
            'endereco' => 'Avenida das paixão, 913',
            'cidade' => 'Ciclovask',
            'estado' => 'Porto Alegre',
            'cep' => '34456-000',
        ]);
    }
}
