<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 1; $x <= 100; $x++) {
            Product::create([
                'name' => 'Product ' . $x,
                'description' => '',
                'category_id' => $x,
                'quantity' => 100,
                'price' => 10
            ]);
        }
    }
}
