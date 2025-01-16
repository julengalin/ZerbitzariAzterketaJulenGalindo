<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alokairua>
 */
class AlokairuaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $etxeas = \App\Models\Etxea::pluck('id')->toArray();
        return [
            'alokatzaile_izena' => $this->faker->sentence,
            'etxea_id' => $this->faker->randomElement($etxeas),
        ];
    }
}
