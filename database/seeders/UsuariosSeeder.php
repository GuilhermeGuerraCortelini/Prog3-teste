<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@email.com',
                'username' => 'Admin',
                'password' => Hash::make('123'),
                'admin' => true,
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@email.com',
                'username' => 'Admin2',
                'password' => Hash::make('admin123'),
                'admin' => false,
            ]
        ]);
    }
}
