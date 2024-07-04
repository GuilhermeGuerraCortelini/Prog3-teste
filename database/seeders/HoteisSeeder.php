<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoteisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hoteis')->insert([
            [
                'nome' => 'HotelBomDimaise',
                'cidade' => 'Bento Gonçalves',
                'pais' => 'Brasil',
                'estrelas' => 4,
                'valorDiaria' => 300,
                'comodidades' => 'Slc',
            ],
            [
                'nome' => 'Hotelteste',
                'cidade' => 'bento',
                'pais' => 'brasil',
                'estrelas' => 5,
                'valorDiaria' => 500,
                'comodidades' => 'Se é doido',
            ]
        ]);
    }
}
