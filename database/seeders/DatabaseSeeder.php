<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ApplicantCategory;
use App\Models\ApplicantType;
use App\Models\Religion;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@site.com',
        ]);
    }
}
