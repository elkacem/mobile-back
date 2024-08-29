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
        User::factory()->create([
            'name' => 'belo',
            'email' => 'belkacemyesse@gmail.com', // Updated email
            'password' => bcrypt('mecakleb_aisgs2024***@@@') // Added password
        ]);
        $this->call(NotificationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(BusinessSeeder::class);
    }
}
