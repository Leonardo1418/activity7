<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_key' => $this->faker->unique()->bothify('Rob-####'), 
            'name' => $this->faker->sentence(4),
            'cover' => $this->faker->imageUrl(640, 480, 'education'),
            'content' => $this->faker->paragraphs(3, true),
            'didactic_material' => $this->faker->word() . '.pdf',
            'kit_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
