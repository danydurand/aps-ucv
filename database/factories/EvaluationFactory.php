<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Evaluation;
use App\Models\ProfessorAsignature;

class EvaluationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evaluation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'professor_asignature_id' => ProfessorAsignature::factory(),
            'objectives' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'evaluation_way' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'percentage' => $this->faker->randomFloat(2, 0, 999.99),
            'points' => $this->faker->randomFloat(2, 0, 999.99),
        ];
    }
}
