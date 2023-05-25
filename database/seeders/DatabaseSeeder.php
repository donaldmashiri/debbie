<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory(10)->create();

        $this->call([
            UserSeeder::class
        ]);

        $this->call([
            SemesterSeeder::class
        ]);
    }
}
