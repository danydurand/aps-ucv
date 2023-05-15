<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Asignature;
use App\Models\Section;
use App\Models\Semester;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'semester_id' => Semester::factory(),
            'asignature_id' => Asignature::factory(),
            'name' => $this->faker->name,
        ];
    }
}
