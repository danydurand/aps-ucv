<?php

namespace Database\Seeders;

use App\Models\Asignature;
use App\Models\Objective;
use App\Models\Period;
use App\Models\Professor;
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
        $period     = Period::getActiveOne();
        $asignature = Asignature::where('name', 'ANALISIS DEMOGRAFICO')->first();

        Objective::create([
            'asignature_id'  => $asignature->id,
            'period_id'      => $period->id,
            'order'          => 1.1,
            'description'    => 'TEMA 1.1',
            'content'        => 'La demografía como campo del conocimiento. Naturaleza sintética y antropológica de los estudios de población. Demografía e interdisciplinariedad. Retos teóricos de la demografía en la sociedad contemporánea. Sociología y estudios de población.',
            'is_active'      => true,
            'books'          => 'BOLIVAR CHOLLET, Miguel (1987) Demografía: Síntesis o encrucijada (una revisión crítica); en: Bidegain G. (Comp.), Estado Actual de los Estudios de la Población en Venezuela, Caracas, ILDIS-UCAB.',
        ]);
        Objective::create([
            'asignature_id'  => $asignature->id,
            'period_id'      => $period->id,
            'order'          => 1.2,
            'description'    => 'TEMA 1.2',
            'content'        => 'La población y la demografía. Reflexiones teóricas y pensadores: China, Roma, Grecia, los ingleses: desde Graunt a Malthus. El pensamiento de Marx. Siglo XX: Baby Boom, los años sesenta y el club de Roma. El fondo de población de la ONU.',
            'is_active'      => true,
            'books'          => 'WELTI, Carlos y Raúl Benítez (coords.) (1999) Hacia la demografía del siglo XXI; Sociedad Mexicana de Demografía/Instituto de Investigaciones Sociales de la UNAM, México.',
        ]);
        Objective::create([
            'asignature_id'  => $asignature->id,
            'period_id'      => $period->id,
            'order'          => 1.3,
            'description'    => 'TEMA 1.3',
            'content'        => 'Los estudios de demografía y de población en América Latina y Venezuela. Principales representantes: estudiosos latinoamericanos y venezolanos: Bariloche, CONAPO, ABAP, ALAP, CELADE-CEPAL, J. E. López, Miguel Bolívar, Chen, UCAB.',
            'is_active'      => true,
            'books'          => 'CANALES I., Alejandro y Susana Lerner, (2003) Desafíos teórico-metodológicos  en los estudios de población en el inicio del milenio. El Colegio de México/universidad de Guadalajara/Sociedad Mexicana de Demografía, Guadalajara.',
        ]);
    }
}
