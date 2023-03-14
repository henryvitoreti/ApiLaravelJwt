<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            [
                "id" => 1,
                "name" => "Camiseta",
                "slug" =>  Str::slug("Camiseta"),
                "price" => 2999
            ],
            [
                "id" => 2,
                "name" => "Tênis",
                "slug" => Str::slug("Tênis"),
                "price" => 9999
            ],
            [
                "id" => 3,
                "name" => "Shorts",
                "slug" => Str::slug("Shorts"),
                "price" => 3999
            ],
            [
                "id" => 4,
                "name" => "Celular",
                "slug" => Str::slug("Celular"),
                "price" => 149999
            ],
            [
                "id" => 5,
                "name" => "Notebook",
                "slug" => Str::slug("Notebook"),
                "price" => 299999
            ],
            [
                "id" => 6,
                "name" => "Sapato",
                "slug" => Str::slug("Sapato"),
                "price" => 7999
            ],
            [
                "id" => 7,
                "name" => "Boné",
                "slug" => Str::slug("Boné"),
                "price" => 1999
            ],
            [
                "id" => 8,
                "name" => "Mochila",
                "slug" => Str::slug("Mochila"),
                "price" => 8999
            ],
            [
                "id" => 9,
                "name" => "Jaqueta",
                "slug" => Str::slug("Jaqueta"),
                "price" => 12999
            ],
            [
                "id" => 10,
                "name" => "Relógio",
                "slug" => Str::slug("Relógio"),
                "price" => 19999
            ],
            [
                "id" => 11,
                "name" => "Óculos",
                "slug" => Str::slug("Óculos"),
                "price" => 5999
            ],
            [
                "id" => 12,
                "name" => "Perfume",
                "slug" => Str::slug("Perfume"),
                "price" => 8999
            ],
            [
                "id" => 13,
                "name" => "Creme Hidratante",
                "slug" =>  Str::slug("Creme Hidratante"),
                "price" => 2999,
            ],
            [
                "id" => 14,
                "name" => "Lápis de Olho",
                "slug" =>  Str::slug("Lápis de Olho"),
                "price" => 999,
            ],
            [
                "id" => 15,
                "name" => "Blush",
                "slug" =>  Str::slug("Blush"),
                "price" => 1499,
            ],
            [
                "id" => 16,
                "name" => "Batom",
                "slug" =>  Str::slug("Batom"),
                "price" => 1999,
            ],
            [
                "id" => 17,
                "name" => "Chinelo",
                "slug" =>  Str::slug("Chinelo"),
                "price" => 999,
            ],
            [
                "id" => 18,
                "name" => "Sandália",
                "slug" =>  Str::slug("Sandália"),
                "price" => 4999,
            ],
            [
                "id" => 19,
                "name" => "Meia",
                "slug" =>  Str::slug("Meia"),
                "price" => 499,
            ],
            [
                "id" => 20,
                "name" => "Cueca",
                "slug" =>  Str::slug("Cueca"),
                "price" => 1499,
            ]
        ]);
    }
}
