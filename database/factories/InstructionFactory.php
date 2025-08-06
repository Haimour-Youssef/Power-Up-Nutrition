<?php

namespace Database\Factories;

use App\Models\Instruction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstructionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instruction::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'order' => $this->faker->randomNumber(0),
            'recette_id' => \App\Models\Recette::factory(),
        ];
    }
}
