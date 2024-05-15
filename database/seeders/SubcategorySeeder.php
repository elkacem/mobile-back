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
            ['category_id' => 1, 'name' => 'Satisfaisant'],
            ['category_id' => 1, 'name' => 'Moyennement Satisfaisant'],
            ['category_id' => 1, 'name' => 'Non Satisfaisant'],

            ['category_id' => 2, 'name' => 'isant'],
            ['category_id' => 2, 'name' => 'atisfaisant'],
            ['category_id' => 2, 'name' => 'sfaisant'],

            ['category_id' => 3, 'name' => 'Satisf'],
            ['category_id' => 3, 'name' => 'Moyenne'],
            ['category_id' => 3, 'name' => 'Non Satis'],
            // Add more subcategories as needed, with appropriate category_id
        ];

        foreach ($subcategories as $subcategoryData) {
            Subcategory::create($subcategoryData);
        }
    }
}
