<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            [
                "id" => 1,
                "title" => "Vestuário"
            ],
            [
                "id" => 2,
                "title" => "Calçados"
            ],
            [
                "id" => 3,
                "title" => "Vestuário"
            ],
            [
                "id" => 4,
                "title" => "Eletrônicos"
            ],
            [
                "id" => 5,
                "title" => "Acessórios"
            ],
            [
                "id" => 6,
                "title" => "Beleza"
            ],
            [
                "id" => 7,
                "title" => "Vestuário"
            ]
        ]);
    }
}
