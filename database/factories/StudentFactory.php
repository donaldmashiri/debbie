<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{

//    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_names' => $this->faker->name,
            'program' => $this->faker->randomElement(['Computer Science', 'Information System', 'Accounting', 'Insurance']),
            'level' => $this->faker->randomElement(['1.1', '1.2', '2.1', '2.2']),
            // Define other fields as needed
        ];
    }
}
