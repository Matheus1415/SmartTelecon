<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UsuarioSeeder;
use Database\Seeders\PlanosInternetSeeder;
use Database\Seeders\ComprasPlanosSeeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            UsuarioSeeder::class,
            PlanosInternetSeeder::class,
            ComprasPlanosSeeder::class,
        ]);
    }
}
