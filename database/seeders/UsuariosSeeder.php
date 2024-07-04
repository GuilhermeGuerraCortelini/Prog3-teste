<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'username' => 'Admin',
                'password' => 'admin123',
                'admin' => false,
            ],
            [
                'name' => 'Admin2',
                'email' => 'admin2@email.com',
                'username' => 'Admin2',
                'password' => 'admin123',
                'admin' => true,
            ]
        ]);
    }
}