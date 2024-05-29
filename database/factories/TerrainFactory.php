<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terrain>
 */
class TerrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $terrainTypes = Type::pluck('id')->toArray();

        return [
            'longueur'  =>fake()->biasedNumberBetween(10,50),
            'largeur'   =>fake()->biasedNumberBetween(10,30),
            'type'      =>fake()->randomElement($terrainTypes),
        ];
    }
}
