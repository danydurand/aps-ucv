<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Professor;
use App\Models\Student;
use App\Models\StudentComment;

class StudentCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentComment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'professor_id' => Professor::factory(),
            'comment' => $this->faker->regexify('[A-Za-z0-9]{250}'),
        ];
    }
}
