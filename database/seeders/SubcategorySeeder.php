<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            ['category_id' => 1, 'name' => 'Crafts'],
            ['category_id' => 1, 'name' => 'Perfumes and Accessories'],
            ['category_id' => 1, 'name' => 'Cakes and confectioneries'],
            ['category_id' => 1, 'name' => 'Dates'],
            ['category_id' => 1, 'name' => 'Toys'],
            ['category_id' => 1, 'name' => 'Bookstores'],
            ['category_id' => 1, 'name' => 'Pharmacies'],
            ['category_id' => 1, 'name' => 'Tobacco and Newspapers'],
            ['category_id' => 1, 'name' => 'Local product and Others'],

            ['category_id' => 2, 'name' => 'Cafeterias'],
            ['category_id' => 2, 'name' => 'Restaurants'],

            ['category_id' => 3, 'name' => 'Travel agency'],
            ['category_id' => 3, 'name' => 'Banks'],
            ['category_id' => 3, 'name' => 'Car rentals'],
            ['category_id' => 3, 'name' => 'Telephone operators'],
            ['category_id' => 3, 'name' => 'baggage wrapper'],
            // Add more subcategories as needed, with appropriate category_id
        ];

        foreach ($subcategories as $subcategoryData) {
            Subcategory::create($subcategoryData);
        }
//       Subcategory::factory()->count(30)->create();
    }
}
