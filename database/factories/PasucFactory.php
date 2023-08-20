<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasuc>
 */
class PasucFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kra'=>fake()->word(),
            'criteria'=>fake()->word(),
            'eval_status'=>fake()->word(),
            'is_submitted'=>fake()->boolean(),
            'cycle'=>'9th',
        ];
    }
}
