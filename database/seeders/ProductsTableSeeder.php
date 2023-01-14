<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $products = [
            ['name' => '素晴らしき日々',
            'price' => 2000,],
            ['name' => '戦国ランス',
            'price' => 3000,],
            ['name' => 'euforia',
            'price' => 2500,]
        ];

        // 登録
        foreach($products as $product) {
        \App\Models\Product::create($product);
    }
    }
}