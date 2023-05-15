<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Enrollment;
use App\Models\Semester;

class EnrollmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enrollment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'semester_id' => Semester::factory(),
            'id_document' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'student_name' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'score_average' => $this->faker->regexify('[A-Za-z0-9]{10}'),
        ];
    }
}
