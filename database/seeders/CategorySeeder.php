<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Category::create(['name' => 'Shops']);
//        Category::create(['name' => 'Dines']);
//        Category::create(['name' => 'Divers']);
        Category::factory()->count(10)->create();
    }
}
