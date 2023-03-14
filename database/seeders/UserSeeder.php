<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Usuário de teste',
            'email' => 'usuario@teste.com.br',
            'password' => bcrypt('senha123'),
        ]);
    }
}
