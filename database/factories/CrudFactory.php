<?php

namespace Database\Factories;

use App\Models\Crud;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Crud>
 */
class CrudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->text(30),
            'type' => $this->faker->numberBetween(1, 2),
            'observations' => $this->faker->text(60)
        ];
    }
}
