<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ProjectFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.local',
            'password' => Hash::make('admin'),
            'email_verified_at' => time(),
        ]);
        Project::factory()
            ->count(30)
            ->hasTasks(10)
            ->create();
    }
}
