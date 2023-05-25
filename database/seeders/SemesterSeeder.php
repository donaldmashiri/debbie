<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('semesters')->insert([
            'name' => 'Semester 1',
            'year' => '2023',
        ]);

        \DB::table('semesters')->insert([
            'name' => 'Semester 2',
            'year' => '2023',
        ]);
    }
}
