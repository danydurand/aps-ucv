<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Asignature;
use App\Models\Department;

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
            'credits' => $this->faker->numberBetween(-10000, 10000),
            'department_id' => Department::factory(),
            'type' => $this->faker->randomLetter,
            'presentation' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'general_objective' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'themes' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'purpose' => $this->faker->regexify('[A-Za-z0-9]{250}'),
        ];
    }
}
