<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("tasks")->insert([
            [
                'nom' => 'Planification',
                'description' => 'faite une planification',
                'projetId' => '1',
            ],
            [
                'nom' => 'presentation',
                'description' => 'faite une presentation',
                'projetId' => '1',
            ],
            [
                'nom' => 'rapport',
                'description' => 'faite une rapport',
                'projetId' => '2',            
            ]
        ]);
        
    }
}