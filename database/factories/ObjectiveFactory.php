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
            'order' => $this->faker->randomFloat(2, 0, .99),
            'description' => $this->faker->text,
            'content' => $this->faker->paragraphs(3, true),
            'is_active' => $this->faker->boolean,
            'books' => $this->faker->regexify('[A-Za-z0-9]{250}'),
        ];
    }
}
