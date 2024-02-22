<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Computer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Computer::class;

    public function definition()
    {
        return [
            'naziv' => $this->faker->name(),
            'procesor' => $this->faker->name(),
            'graficka' => $this->faker->name(),
            'kuciste' => $this->faker->name(),
            'ram' => $this->faker->name(),
            'napojna' => $this->faker->name(),
            'brand' => $this->faker->numberBetween(1,5),
        ];
    }
}
