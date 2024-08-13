<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'name' => 'Project 1',
                'status' => 'Active'
            ],
            [
                'name' => 'Project 2',
                'status' => 'Inactive'
            ],
            [
                'name' => 'Project 3',
                'status' => 'Active'
            ],
            [
                'name' => 'Project 4',
                'status' => 'Active'
            ],
            [
                'name' => 'Project 5',
                'status' => 'Active'
            ],
        ]);
    }
}
