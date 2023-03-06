<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Facture;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HistoriqueFactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'montant' => $this->faker->randomFloat(2, 50, 1000),
            'etat' => $this->faker->randomElement(['payée', 'en attente de paiement', 'annulée']),
            'facture_id' => function () {
                return Facture::factory()->create()->id;
            },
        ];
    }
}
