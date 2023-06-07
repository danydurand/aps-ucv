<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DepartmentSeeder::class,
            PeriodSeeder::class,
            VacationSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            AsignatureSeeder::class,
            ObjectiveSeeder::class,
            ProfessorSeeder::class,
            ProfessorAsignatureSeeder::class,
        ]);
    }
}
