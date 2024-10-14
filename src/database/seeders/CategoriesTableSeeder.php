<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "id" => 1,
            "content" => '商品のお届けについて'
        ]);

        Category::create([
            "id" => 2,
            "content" => '商品の交換について'
        ]);

        Category::create([
            "id" => 3,
            "content" => '商品トラブル'
        ]);

        Category::create([
            "id" => 4,
            "content" => 'ショップへのお問い合わせ'
        ]);

        Category::create([
            "id" => 5,
            "content" => 'その他'
        ]);
    }
}
