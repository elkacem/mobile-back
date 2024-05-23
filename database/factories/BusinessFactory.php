<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => $this->faker->name(),
        'slogan' => $this->faker->text(10),
        'subcategory_id' => function() {
            return Subcategory::inRandomOrder()->first()->id;
        },
        'image' => 'https://i.pravatar.cc/300?img='.$this->faker->numberBetween(1,70),
        'logo' => 'https://i.pravatar.cc/150?img='.$this->faker->numberBetween(1,70),
        'location' => $this->faker->text(10),
        'opening_time' => $this->faker->time,
        'working_days' => $this->faker->text(5),
        'contact' => $this->faker->phoneNumber,
        'description' => $this->faker->text(50),
        ];
    }
}
