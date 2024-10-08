<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        Product::create([
            'name' => 'Product 1',
            'short_description' => 'Short description for product 1',
            'description' => 'Description for product 1',
            'price' => 100
        ]);
        Product::create([
            'name' => 'Product 2',
            'short_description' => 'Short description for product 2',
            'description' => 'Description for product 2',
            'price' => 200
        ]);
        Product::create([
            'name' => 'Product 3',
            'short_description' => 'Short description for product 3',
            'description' => 'Description for product 3',
            'price' => 300
        ]);
    }
}
