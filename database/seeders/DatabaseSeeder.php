<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agency;
use App\Models\AgencyRepresentative;
use App\Models\User;
use App\Models\Religion;
use App\Models\Application;
use App\Models\ApplicantType;
use Illuminate\Database\Seeder;
use App\Models\ApplicantCategory;
use App\Models\EducationalBackground;
use App\Models\WorkExperiences;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ApplicantType::factory(10)->create();
        ApplicantCategory::factory(10)->create();
        Religion::factory(10)->create();

        Application::factory(100)
            ->has(EducationalBackground::factory(3))
            ->has(WorkExperiences::factory(3))
            ->create();

        Agency::factory(10)
            ->has(AgencyRepresentative::factory(3))
            ->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@site.com',
        ]);
    }
}
