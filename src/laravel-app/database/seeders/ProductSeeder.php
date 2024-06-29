<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'ノート', 'stock' => 10]);
        Product::create(['name' => 'シャーペン', 'stock' => 10]);
        Product::create(['name' => 'A4用紙', 'stock' => 30]);
        Product::create(['name' => 'のり', 'stock' => 100]);
        Product::create(['name' => '封筒', 'stock' => 50]);
        

    }
}
