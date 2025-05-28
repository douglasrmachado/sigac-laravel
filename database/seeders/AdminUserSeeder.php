<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Verifica se o usuário admin já existe para evitar duplicidade
        $adminEmail = 'admin@ifpr.edu.br';

        $userExists = DB::table('users')->where('email', $adminEmail)->exists();

        if (!$userExists) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => Hash::make('senha123'),  // Defina a senha que quiser aqui
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

