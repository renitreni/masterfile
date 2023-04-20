<?php

namespace Database\Factories;

use App\Enums\CompanyCategoryEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agency>
 */
class AgencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => $this->faker->randomNumber(),
            'name' => $this->faker->company(),
            'category' => $this->faker->randomElement(CompanyCategoryEnum::cases()),
            'address' => $this->faker->address(),
            'contact_no' => $this->faker->phoneNumber(),
            'website' => $this->faker->url(),
        ];
    }
}
