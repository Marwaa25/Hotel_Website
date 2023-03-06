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
            'name'=>$this->faker->word,
            'adresse'=>$this->faker->sentence,
            'CP'=>$this->faker->randomFloat(1,2,3,4,5,6,7,8,9),
            'tele'=>$this->faker->randomFloat(1,2,3,4,5,6,7,8,9),
            'email'=>$this->faker->sentence,
            'site'=>$this->faker->sentence,
            'nb_etoiles'=>$this->faker->randomFloat(1,2,3,4,5),
        ];
    }
}
