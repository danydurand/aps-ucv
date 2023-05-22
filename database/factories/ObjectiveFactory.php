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
        $asignature = Asignature::inRandomOrder()->first()->id;
        $asignature = Asignature::inRandomOrder()->first()->id;
        return [
            'asignature_id' => $asignature,
            'period_id'     => $asignature,
            'order'         => $this->faker->randomFloat(2, 1, 4.99),
            'description'   => $this->faker->text,
            'content'       => $this->faker->paragraphs(1, true),
            'is_active'     => true,
            'books'         => $this->faker->regexify('[A-Z0-9]{50}'),
        ];
    }
}
