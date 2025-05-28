<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Se quiser criar usuários de teste, pode deixar ou remover esta linha
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Chama o seeder que cria o usuário admin
        $this->call([
            AdminUserSeeder::class,
            AlunoUserSeeder::class,
        ]);
    }
}
