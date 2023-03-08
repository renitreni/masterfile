<?php

namespace Database\Factories;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkExperiences>
 */
class WorkExperiencesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'application_id' => Application::query()->inRandomOrder()->first()->id,
            'company_name' => $this->faker->company(),
            'position' => $this->faker->jobTitle(),
            'address' => $this->faker->address(),
            'contact_no' => $this->faker->phoneNumber(),
            'years_experience' => $this->faker->numberBetween(0,5),
        ];
    }
}
