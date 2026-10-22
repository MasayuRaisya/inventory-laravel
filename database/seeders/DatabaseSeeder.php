<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $elektronik = Category::create(['name' => 'Elektronik']);
        $pakaian = Category::create(['name' => 'Pakaian']);

        Product::create([
            'category_id' => $elektronik->id,
            'sku' => 'SKU-001',
            'name' => 'Mouse Wireless',
            'price' => 150000,
            'stock' => 10,
            'minimum_stock' => 2
        ]);

        Product::create([
            'category_id' => $pakaian->id,
            'sku' => 'SKU-002',
            'name' => 'Kaos Polos',
            'price' => 50000,
            'stock' => 25,
            'minimum_stock' => 5
        ]);
    }
}