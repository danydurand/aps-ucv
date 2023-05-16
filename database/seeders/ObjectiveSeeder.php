<?php

namespace Database\Seeders;

use App\Models\Asignature;
use App\Models\Objective;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $asignature = Asignature::whereName('INTRODUCCION A LA SOCIOLOGIA')->first()->id;
        
        Objective::factory()
            ->count(20)
            ->create();
    }
}
