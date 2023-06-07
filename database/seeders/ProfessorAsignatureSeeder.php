<?php

namespace Database\Seeders;

use App\Models\Professor;
use App\Models\ProfessorAsignature;
use App\Models\Period;
use App\Models\Asignature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfessorAsignatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $period = Period::getActiveOne();

        $professor  = Professor::where('name', 'MIGUEL DENIS')->first();
        $asignature = Asignature::where('name', 'ANALISIS DEMOGRAFICO')->first();
        ProfessorAsignature::create([
            'period_id'     => $period->id,
            'professor_id'  => $professor->id,
            'asignature_id' => $asignature->id,
            'section'       => 'K',
        ]);

        $professor  = Professor::where('name', 'OLY MILLAN')->first();
        $asignature = Asignature::where('name', 'ECONOMIA POLITICA I')->first();
        ProfessorAsignature::create([
            'period_id'     => $period->id,
            'professor_id'  => $professor->id,
            'asignature_id' => $asignature->id,
            'section'       => 'A',
        ]);

        $professor  = Professor::where('name', 'CARYNTHIA LEYDENZ')->first();
        $asignature = Asignature::where('name', 'INTRODUCCION A LA ESTADISTICA')->first();
        ProfessorAsignature::create([
            'period_id'     => $period->id,
            'professor_id'  => $professor->id,
            'asignature_id' => $asignature->id,
            'section'       => 'N',
        ]);

        $professor  = Professor::where('name', 'ANTONIO SUAREZ')->first();
        $asignature = Asignature::where('name', 'TEORIA SOCIAL I')->first();
        ProfessorAsignature::create([
            'period_id'     => $period->id,
            'professor_id'  => $professor->id,
            'asignature_id' => $asignature->id,
            'section'       => 'B',
        ]);

    }
}
