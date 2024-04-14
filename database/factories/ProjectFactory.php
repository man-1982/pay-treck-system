<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{

    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          => fake()?->sentence('7', TRUE),
            'description'   => fake()?->paragraph(2, TRUE),
            'due_date'      => fake()?->dateTimeBetween('now', '+1 year'),
            'status'        => fake()?->randomElement(['pending', 'in_progress', 'completed']),
            'image_path'    => fake()?->imageUrl(),
            'created_by'    => 1, //for the start use user 1
            'updated_by'    => 1, //for the start use user 1
        ];
    }
}
