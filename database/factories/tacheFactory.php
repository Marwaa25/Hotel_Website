<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class tacheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID_Personnel'=> function(){
                return factory(Personnel::class)->create()->id;
            },
            'description_tache' => $this->faker->sentence,
            'date_debut' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'date_fin' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
        ];
    }
}
