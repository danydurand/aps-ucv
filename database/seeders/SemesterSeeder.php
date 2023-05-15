<?php

namespace Database\Seeders;

use App\Models\Semester;
use App\Models\Professor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Semester::create([
            'name'       => '2022-01',
            'start_date' => '2021-04-25',
            'end_date'   => '2021-09-15',
            'is_active'  => false,
        ]);
        Semester::create([
            'name'       => '2022-02',
            'start_date' => '2021-11-21',
            'end_date'   => '2023-03-24',
            'is_active'  => false,
        ]);
        Semester::create([
            'name'       => '2023-01',
            'start_date' => '2023-05-08',
            'end_date'   => '2023-10-11',
            'is_active'  => true,
        ]);
    }
}
