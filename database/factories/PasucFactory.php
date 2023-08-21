<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Eqar;

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
            'kra'=>fake()->randomElement(['1','2','3','4']),
            'criteria'=>fake()->randomElement(['A','B','C']),
            'eval_status'=>fake()->randomElement(['Ongoing','Finished','Returned']),
            'is_submitted'=>fake()->boolean(),
            'cycle'=>'9th',
            'eqar_user_user_id' => function () {
                return Eqar::inRandomOrder()->first()->user_user_id;
            },
            'eqar_eqar_id' => function () {
                return Eqar::inRandomOrder()->first()->eqar_id;
            },
        ];
    }
}
