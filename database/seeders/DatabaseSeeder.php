<?php

namespace Database\Seeders;

use App\Models\CategoryAndSubcategory;
use App\Models\Notification;
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
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        User::factory()->create([
            'name' => 'belo',
            'email' => 'belo@mail.com',
        ]);
        Notification::factory(3)->create();

        $this->call([
            CategorySeeder::class,
            SubcategorySeeder::class,
            // Add more seeders here if needed
        ]);
    }
}
