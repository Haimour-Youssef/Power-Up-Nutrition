<?php

namespace Database\Factories;

use App\Models\Recette;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecetteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recette::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->sentence(15),
            'Preparation' => $this->faker->randomNumber(2),
            'Portions' => $this->faker->randomNumber(2),
            'Calories' => $this->faker->randomNumber(2),
            'type' => '',
        ];
    }
}
