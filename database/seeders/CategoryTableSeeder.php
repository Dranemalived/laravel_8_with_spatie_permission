<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cetegory as ModelsCetegory;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x < 100; $x++) {
            ModelsCetegory::create([
                'name' => "Category " . $x,
                'description' => ""
            ]);
        }
    }
}
