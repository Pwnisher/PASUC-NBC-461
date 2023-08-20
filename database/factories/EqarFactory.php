<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eqar>
 */
class EqarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'is_applied' => fake()->boolean($chanceOfGettingTrue = 50),
            'file_path' => fake()->word(),
            'title' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'inclusive_date' => fake()->dateTime($max = 'now', $timezone = null),
            'accomplishment_name' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'department_section' => fake()->word(),
            'qar_type' => fake()->word(),
            'date_submitted' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'status' => fake()->randomElement(['Pending','Qualified']),
            'user_user_id' => function () {
                return User::inRandomOrder()->first()->user_id;
            },
        ];
    }
}
