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
        $asignature  = Asignature::inRandomOrder()->first()->id;
        $description = $this->faker->randomElement(['Objetivo 1', 'Objetivo 2', 'Objetivo 3', 'Objetivo 4']);

        return [
            'asignature_id' => $asignature,
            'description'   => $description,
            'is_active'     => true,
        ];
    }
}
