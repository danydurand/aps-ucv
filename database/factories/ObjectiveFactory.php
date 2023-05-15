<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Asignature;
use App\Models\Objective;

class ObjectiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Objective::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'asignature_id' => Asignature::factory(),
            'description' => $this->faker->text,
            'is_active' => $this->faker->boolean,
        ];
    }
}
