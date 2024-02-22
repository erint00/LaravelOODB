<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Purchase;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sifra' => $this->faker->unique()->numberBetween(1,1000),
            'vrijeme' => Carbon::now(),
            'opis' => 'neki opis',
            'kupac' => $this->faker->numberBetween(1,10),
            'racunar' => $this->faker->numberBetween(1,10),
        ];
    }
}
