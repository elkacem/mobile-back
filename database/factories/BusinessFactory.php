<?php

namespace Database\Factories;

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
            $table->id(); // This creates an unsignedBigInteger
        $table->string('name');
        $table->string('slogan');
        $table->foreignId('subcategory_id')->constrained()->onDelete('cascade');
        $table->string('image')->nullable();
        $table->string('logo')->nullable();
        $table->string('location')->nullable();
        $table->string('opening_time')->nullable();
        $table->string('working_days')->nullable();
        $table->string('contact')->nullable();
        $table->text('description')->nullable();
        $table->timestamps();
        'name' => $this->faker->name();
        ];
    }
}
