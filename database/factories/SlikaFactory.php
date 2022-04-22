<?php

namespace Database\Factories;

use App\Models\Kupac;
use App\Models\Slikar;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlikaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->streetSuffix(),
            'godina' => $this->faker->numberBetween($min = 1850, $max = 2022),
            'cena' => $this->faker->numberBetween($min = 100.00, $max = 1000000.00),
            'slikar_id' => Slikar::factory(),
            'kupac_id' => Kupac::factory(),
        ];
    }
}
