<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'id_document' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'password' => $this->faker->password,
        ];
    }
}
