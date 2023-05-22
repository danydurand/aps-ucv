<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Asignature;
use App\Models\AsignatureProfessor;
use App\Models\Professor;

class AsignatureProfessorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AsignatureProfessor::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'asignature_id' => Asignature::factory(),
            'profressor_id' => Professor::factory(),
            'section' => $this->faker->regexify('[A-Za-z0-9]{5}'),
        ];
    }
}
