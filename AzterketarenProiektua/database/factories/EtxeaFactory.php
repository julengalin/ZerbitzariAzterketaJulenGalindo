<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etxea>
 */
class EtxeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'helbidea' => $this->faker->sentence,
            'logela_kopurua' => $this->faker->sentence,
            'eraikuntza_urtea' => $this->faker->sentence,
        ];
    }
}
