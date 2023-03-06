<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facture>
 */
class FactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date de factorisation'=>$this->faker->date(),
            'date de paiement'=>$this->faker->date(),
            'montant'=>$this->faker->randomFloat(é,50,1000),
            'client_id'=> function() {
                return factory(Client::class)->create()->id;
            },
            'reservation_id'=> function(){
                return factory(Reservation::class)->create()->id;
            }
        ];
    }
}
