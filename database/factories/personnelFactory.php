<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class personnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom' => $this->faker->lastName,
            'Prenom' => $this->faker->firstName,
            'Adresse' => $this->faker->address,
            'Email' => $this->faker->unique()->safeEmail,
            'Telephone' => $this->faker->phoneNumber,
            'Poste' => $this->faker->jobTitle,
            'Salaire' => $this->faker->randomFloat(2, 1000, 5000),
        ];
    }
}
