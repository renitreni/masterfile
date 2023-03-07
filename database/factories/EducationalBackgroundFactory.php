<?php

namespace Database\Factories;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationalBackground>
 */
class EducationalBackgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'applications_id' => Application::query()->inRandomOrder()->first()->id,
            'level' => $this->faker->randomElement(['elementary', 'highschool', 'college', 'university', 'post graduate']),
            'course' => $this->faker->word(),
            'address' => $this->faker->address(),
            'year_graduate' => $this->faker->year('-6 years'),
            'awards'  => $this->faker->word(),
        ];
    }
}
