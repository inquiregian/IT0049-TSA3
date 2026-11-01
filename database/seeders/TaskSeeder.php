<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $today = now()->toDateString();

        User::create([
            'username' => 'gian',
            'full_name' => 'Gian Carlo Sarmiento',
            'email' => 'gian.sarmiento@example.com',
        ]);

        $tasks = [
            ['title' => 'Review Laravel models', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Complete database seeder', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Check application routes', 'status' => 'completed', 'task_date' => $today],
            ['title' => 'Read Laravel documentation', 'status' => 'pending', 'task_date' => now()->subDay()->toDateString()],
            ['title' => 'Organize project files', 'status' => 'completed', 'task_date' => now()->subDay()->toDateString()],
            ['title' => 'Review migration files', 'status' => 'pending', 'task_date' => now()->subDay()->toDateString()],
            ['title' => 'Prepare project README', 'status' => 'pending', 'task_date' => now()->addDay()->toDateString()],
            ['title' => 'Review assessment requirements', 'status' => 'pending', 'task_date' => now()->addDay()->toDateString()],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}