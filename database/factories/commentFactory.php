<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class commentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID_Client'=> function(){
                return factory(Client::class)->create()->id;
            },
            'Comment'=>$this->faker->sentence,
            'Note'=>$this->faker->randomFloat(1,2,3,4,5,6,7,8,9,10),
            'datecomment'=> $this->faker->date,
        ];
    }
}
