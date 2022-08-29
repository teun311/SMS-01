<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     *
     * @return array
     */
    public function definition()
    {
        return [
            'section_name' => $this->faker->unique->text(255),
            'capacity' => $this->faker->text(255),
            'slug' => $this->faker->slug,
            'note' => $this->faker->text,
            'status' => $this->faker->numberBetween(0, 127),
        ];
    }
}
