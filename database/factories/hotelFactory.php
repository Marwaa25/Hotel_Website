<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class hotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name-hotel'=>$this->faker->word,
            'adresse-hotel'=>$this->faker->sentence,
            'CP-hotel'=>$this->faker->randomFloat(1,2,3,4,5,6,7,8,9),
            'tele-hotel'=>$this->faker->randomFloat(1,2,3,4,5,6,7,8,9),
            'email-hotel'=>$this->faker->sentence,
            'site-hotel'=>$this->faker->sentence,
            'nb-etoiles'=>$this->faker->randomFloat(1,2,3,4,5),
        ];
    }
}
