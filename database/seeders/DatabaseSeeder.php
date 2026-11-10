<?php

namespace Database\Seeders;

use App\Models\Marca;
use App\Models\Veiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Marca::create([
            'nome' => 'Chevrolet'
        ]);

        Marca::create([
            'nome' => 'Toyota'
        ]);

        Marca::create([
            'nome' => 'Volkswagen'
        ]);

        Veiculo::create([
            'marca_id' => 1,
            'modelo' => 'Onix LTZ',
            'ano' => 2023,
            'preco' => 85000,
            'status' => 'disponivel'
        ]);

        Veiculo::create([
            'marca_id' => 2,
            'modelo' => 'Supra',
            'ano' => 2023,
            'preco' => 850000,
            'status' => 'vendido'
        ]);

        Veiculo::create([
            'marca_id' => 3,
            'modelo' => 'Gol',
            'ano' => 2023,
            'preco' => 85000,
            'status' => 'disponivel'
        ]);

        Veiculo::create([
            'marca_id' => 1,
            'modelo' => 'KIKS',
            'ano' => 2023,
            'preco' => 15000,
            'status' => 'disponivel'
        ]);
    }
}
