<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Notification;
use App\Models\Subcategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        // Get all subcategory IDs
//        $subcategoryIds = Subcategory::all()->pluck('id')->toArray();
//        // User::factory(10)->create();
//
////        User::factory()->create([
////            'name' => 'Test User',
////            'email' => 'test@example.com',
////        ]);
//        User::factory()->create([
//            'name' => 'belo',
//            'email' => 'belo@mail.com',
//        ]);
//        Notification::factory(3)->create();
//        Business::factory()->count(50)->create([
//            'subcategory_id' => function() use ($subcategoryIds) {
//                return $this->faker->randomElement($subcategoryIds);
//            },
//
//        $this->call([
//            CategorySeeder::class,
//            SubcategorySeeder::class,
//            // Add more seeders here if needed
//        ]);
        User::factory()->create([
            'name' => 'belo',
            'email' => 'belo@mail.com',
        ]);
        $this->call(NotificationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(BusinessSeeder::class);
    }
}
