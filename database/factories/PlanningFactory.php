<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Asignature;
use App\Models\Objective;
use App\Models\Planning;
use App\Models\Professor;
use App\Models\Semester;

class PlanningFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Planning::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'semester_id'    => Semester::factory(),
            'asignature_id'  => Asignature::factory(),
            'professor_id'   => Professor::factory(),
            'objective_id'   => Objective::factory(),
            'estimated_date' => $this->faker->date(),
        ];
    }
}
