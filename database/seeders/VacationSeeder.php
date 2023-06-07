<?php

namespace Database\Seeders;

use App\Models\Period;
use App\Models\Vacation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VacationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $period = Period::where('name', '2022-01')->first();

        Vacation::create([
            'period_id'  => $period->id,
            'name'       => 'SEMANA SANTA',
            'start_date' => '2021-04-30',
            'end_date'   => '2021-05-07',
        ]);
    }
}
