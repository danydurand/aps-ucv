<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Asignature;
use App\Models\Professor;

class AsignatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asignature::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'name' => $this->faker->name,
            'professor_id' => Professor::factory(),
            'is_active' => $this->faker->boolean,
            'type' => $this->faker->randomLetter,
        ];
    }
}
