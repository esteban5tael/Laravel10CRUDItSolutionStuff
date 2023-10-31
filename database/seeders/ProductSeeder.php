<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 11; $i++) {
            Product::create([
                "name" => "Product 0{$i}",
                "detail" => "Product 0{$i}",
            ]);
        }
    }
}
