<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provedor;

class ProvedorSeeder extends Seeder
{

    public function run()
    {
        Provedor::create([
            'empresa' => 'TechNet Solutions',
            'cnpj' => '12.345.678/0001-01',
            'endereco' => 'Rua das Inovações, 123',
            'cidade' => 'Tecnópolis',
            'estado' => 'Tecnofornia',
            'cep' => '12345-678',
        ]);

        Provedor::create([
            'empresa' => 'BitStream Telecom',
            'cnpj' => '98.765.432/0001-09',
            'endereco' => 'Avenida da Velocidade, 456',
            'cidade' => 'Fibralândia',
            'estado' => 'Netrópolis',
            'cep' => '98765-432',
        ]);

        Provedor::create([
            'empresa' => 'Conexão Veloz',
            'cnpj' => '11.223.344/0001-02',
            'endereco' => 'Rua dos Downloads, 789',
            'cidade' => 'Conectópolis',
            'estado' => 'Conectolândia',
            'cep' => '11223-344',
        ]);

        Provedor::create([
            'empresa' => 'MegaLink Telecom',
            'cnpj' => '44.555.666/0001-03',
            'endereco' => 'Avenida das Conexões, 987',
            'cidade' => 'Megaville',
            'estado' => 'Megalândia',
            'cep' => '44556-666',
        ]);
    }
}
