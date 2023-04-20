<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AgencyRepresentative>
 */
class AgencyRepresentativeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'representative' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'passport_id' => $this->faker->buildingNumber(),
            'tin' => $this->faker->buildingNumber(),
            'contact_no' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'facebook' => $this->faker->url(),
        ];
    }
}
