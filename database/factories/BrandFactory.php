<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->randomElement(['AMD','Intel','Huawei','Samsung','Acer']),
            'drzava' => $this->faker->randomElement(['USA','Kina','Japan','UK','Taiwan']),

        ];
    }
}
