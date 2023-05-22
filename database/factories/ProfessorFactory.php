<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Department;
use App\Models\Professor;

class ProfessorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Professor::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'department_id' => Department::factory(),
            'email' => $this->faker->safeEmail,
            'password' => $this->faker->password,
            'is_active' => $this->faker->boolean,
            'id_document' => $this->faker->regexify('[A-Za-z0-9]{30}'),
            'phones' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'comments' => $this->faker->word,
        ];
    }
}
