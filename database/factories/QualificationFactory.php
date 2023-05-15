<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Planning;
use App\Models\Qualification;
use App\Models\Student;

class QualificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Qualification::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'evaluation_id' => Planning::factory(),
            'score' => $this->faker->randomFloat(2, 0, 999.99),
            'comments' => $this->faker->regexify('[A-Za-z0-9]{100}'),
        ];
    }
}
