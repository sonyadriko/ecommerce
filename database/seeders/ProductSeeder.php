<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
            ['name' => 'Laptop', 'description' => 'High performance laptop', 'price' => 1000.00, 'stock' => 10, 'category_id' => 1],
            ['name' => 'T-shirt', 'description' => 'Comfortable cotton t-shirt', 'price' => 20.00, 'stock' => 50, 'category_id' => 2],
        ]);
    }
}