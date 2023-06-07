<?php

namespace Database\Seeders;

use App\Models\Period;
use App\Models\Professor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Period::create([
            'name'                 => '2022-01',
            'start_date'           => '2021-04-25',
            'end_date'             => '2021-09-15',
            'delivery_notes_limit' => '2021-09-07',
            'is_active'            => false,
            'is_closed'            => true,
        ]);
        Period::create([
            'name'                 => '2022-02',
            'start_date'           => '2021-11-21',
            'end_date'             => '2023-03-24',
            'delivery_notes_limit' => '2021-03-17',
            'is_active'            => false,
            'is_closed'            => true,
        ]);
        Period::create([
            'name'                 => '2023-01',
            'start_date'           => '2023-05-08',
            'end_date'             => '2023-10-11',
            'delivery_notes_limit' => '2021-10-04',
            'is_active'            => true,
            'is_closed'            => false,
        ]);
    }
}
