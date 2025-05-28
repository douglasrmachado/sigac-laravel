<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AlunoUserSeeder extends Seeder
{
    public function run()
    {
        $alunoEmail = 'aluno@ifpr.edu.br';

        $userExists = DB::table('users')->where('email', $alunoEmail)->exists();

        if (!$userExists) {
            DB::table('users')->insert([
                'name' => 'Aluno',
                'email' => $alunoEmail,
                'password' => Hash::make('senha123'),
                'role' => 'aluno',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
