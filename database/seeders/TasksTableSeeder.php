<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'project_id' => 1,
                'name' => 'Task 1',
                'status' => 'Active',
            ],
            [
                'project_id' => 1,
                'name' => 'Task 2',
                'status' => 'Active',
            ],
            [
                'project_id' => 1,
                'name' => 'Task 3',
                'status' => 'Active',
            ],
            [
                'project_id' => 4,
                'name' => 'Task 4',
                'status' => 'Active',
            ],
            [
                'project_id' => 4,
                'name' => 'Task 5',
                'status' => 'Active',
            ],
        ]);
    }
}
