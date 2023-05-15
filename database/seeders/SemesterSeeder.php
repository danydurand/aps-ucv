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
            'start_date' => '2022-04-04',
            'end_date'   => '2022-08-10',
        ]);
        Semester::create([
            'name'       => '2022-02',
            'start_date' => '2022-10-03',
            'end_date'   => '2023-03-31',
        ]);
        Semester::create([
            'name'       => '2023-01',
            'start_date' => '2023-04-10',
            'end_date'   => '2023-08-04',
        ]);
        Semester::create([
            'name'       => '2023-02',
            'start_date' => '2023-10-10',
            'end_date'   => '2023-03-31',
        ]);
    }
}