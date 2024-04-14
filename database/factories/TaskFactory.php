<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected $model =Task::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          => fake()->sentence(8, TRUE),
            'description'   => fake()->paragraph(2, TRUE),
            'image_path'    => fake()->imageUrl(),
            'status'        => fake()->randomElement(['pending', 'in_progress', 'completed']),
            'priority'      => fake()->randomElement(['low', 'medium', 'high']),
            'due_date'      => fake()->dateTimeBetween('now', '+3 year'),
            'assigned_to'   => 1, //for the start use user 1
            'created_by'    => 1, //for the start use user 1
            'updated_by'    => 1, //for the start use user 1
        ];
    }
}
