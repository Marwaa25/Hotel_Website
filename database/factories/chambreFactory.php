<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class chambreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_de_chambre' => $this->faker->word,
            'etage' => $this->faker->sentence,
            'prix_par_nuit' => $this->faker->randomFloat(2, 50, 500),
            'disponibilite' => $this->faker->boolean,
        ];
    }
}








