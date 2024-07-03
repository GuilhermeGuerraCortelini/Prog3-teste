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
        DB::table('hoteis')->insert(
            [
                'nome' => 'Hotelteste',
                'cidade' => 'bento',
                'pais' => 'brasil',
                'estrelas' => '4',
                'valorDiaria' => '3',
                'comodidades' => 'oi'
            ],
    );
    }
}
