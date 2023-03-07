<?php

namespace Database\Factories;

use App\Models\ApplicantCategory;
use App\Models\ApplicantType;
use App\Models\Religion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
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
            'position' => $this->faker->jobTitle(),
            'position_category'  => $this->faker->jobTitle(),
            'applicant_date' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'civil_status' => $this->faker->randomElement(['married', 'divorced', 'separated', 'widowed']),
            'birthdate' => $this->faker->date(max: '-18 years'),
            'short_address' => $this->faker->address(),
            'complete_address' => $this->faker->address(),
            'contact_no' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'facebook' => $this->faker->email(),
            'jobsite'  => $this->faker->email(),
            'applicant_category_id' => ApplicantCategory::query()->inRandomOrder()->first(),
            'applicant_type_id' => ApplicantType::query()->inRandomOrder()->first(),
            'religion_id' => Religion::query()->inRandomOrder()->first(),
        ];
    }
}
