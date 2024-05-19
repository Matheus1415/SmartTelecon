<?php

namespace Database\Seeders;

use App\Models\Compra;
use Illuminate\Database\Seeder;

class ComprasPlanosSeeder extends Seeder
{
    public function run(): void
    {
        Compra::create([
            'referencia_user' => '1',
            'idPlanosCompra' => 1,
            'emailComprador' => 'joao.gomes@example.com',
            'nomeComprador' => 'João da Silva',
            'numeroCartao' => '1111 1111 1111 111',
            'valor' => 39.99,
            'vencimentoCartao' => '12/25',
            'codigoCartao' => '123',
        ]);

        Compra::create([
            'referencia_user' => '1',
            'idPlanosCompra' => 2,
            'emailComprador' => 'maria.oliveira@example.com',
            'nomeComprador' => 'Maria Oliveira',
            'numeroCartao' => '2222 2222 2222 222',
            'valor' => 199.99,
            'vencimentoCartao' => '11/24',
            'codigoCartao' => '456',
        ]);

        Compra::create([
            'referencia_user' => '2',
            'idPlanosCompra' => 3,
            'emailComprador' => 'carlos.pereira@example.com',
            'nomeComprador' => 'Carlos Pereira',
            'numeroCartao' => '3333 3333 3333 333',
            'valor' => 99.99,
            'vencimentoCartao' => '10/23',
            'codigoCartao' => '789',
        ]);

        Compra::create([
            'referencia_user' => '2',
            'idPlanosCompra' => 4,
            'emailComprador' => 'ana.souza@example.com',
            'nomeComprador' => 'Ana Souza',
            'numeroCartao' => '4444 4444 4444 444',
            'valor' => 49.99,
            'vencimentoCartao' => '09/22',
            'codigoCartao' => '012',
        ]);

        Compra::create([
            'referencia_user' => '3',
            'idPlanosCompra' => 5,
            'emailComprador' => 'lucas.santos@example.com',
            'nomeComprador' => 'Lucas Santos',
            'numeroCartao' => '5555 5555 5555 555',
            'valor' => 76.99,
            'vencimentoCartao' => '08/21',
            'codigoCartao' => '345',
        ]);

        Compra::create([
            'referencia_user' => '3',
            'idPlanosCompra' => 6,
            'emailComprador' => 'fernanda.lima@example.com',
            'nomeComprador' => 'Fernanda Lima',
            'numeroCartao' => '6666 6666 6666 666',
            'valor' => 89.99,
            'vencimentoCartao' => '07/20',
            'codigoCartao' => '678',
        ]);

        Compra::create([
            'referencia_user' => '4',
            'idPlanosCompra' => 7,
            'emailComprador' => 'eduardo.silva@example.com',
            'nomeComprador' => 'Eduardo Silva',
            'numeroCartao' => '7777 7777 7777 777',
            'valor' => 112.90,
            'vencimentoCartao' => '06/19',
            'codigoCartao' => '901',
        ]);

        Compra::create([
            'referencia_user' => '4',
            'idPlanosCompra' => 8,
            'emailComprador' => 'mariana.almeida@example.com',
            'nomeComprador' => 'Mariana Almeida',
            'numeroCartao' => '8888 8888 8888 888',
            'valor' => 99.00,
            'vencimentoCartao' => '05/18',
            'codigoCartao' => '234',
        ]);

        Compra::create([
            'referencia_user' => '5',
            'idPlanosCompra' => 8,
            'emailComprador' => 'leticia@example.com',
            'nomeComprador' => 'leticia Almeida',
            'numeroCartao' => '8998 8438 0174 8712',
            'valor' => 99.00,
            'vencimentoCartao' => '05/18',
            'codigoCartao' => '234',
        ]);

        Compra::create([
            'referencia_user' => '6',
            'idPlanosCompra' => 8,
            'emailComprador' => 'emanuel@example.com',
            'nomeComprador' => 'Emanuel Gomes',
            'numeroCartao' => '7834 0234 8723 0917',
            'valor' => 99.00,
            'vencimentoCartao' => '05/18',
            'codigoCartao' => '234',
        ]);

        Compra::create([
            'referencia_user' => '7',
            'idPlanosCompra' => 8,
            'emailComprador' => 'carlosgabriel@example.com',
            'nomeComprador' => 'Carlos Gabriel',
            'numeroCartao' => '9832 0987 1087 9234',
            'valor' => 99.00,
            'vencimentoCartao' => '05/18',
            'codigoCartao' => '234',
        ]);

        Compra::create([
            'referencia_user' => '8',
            'idPlanosCompra' => 8,
            'emailComprador' => 'matheus.silva@example.com',
            'nomeComprador' => 'Matheus Silva',
            'numeroCartao' => '0912 8162 8264 0045',
            'valor' => 99.00,
            'vencimentoCartao' => '05/18',
            'codigoCartao' => '234',
        ]);

    }
}
