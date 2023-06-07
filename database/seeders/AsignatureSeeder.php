<?php

namespace Database\Seeders;

use App\Models\Asignature;
use App\Models\Department;
use App\Models\Professor;
use App\Models\Period;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AsignatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proc = Department::whereName('PROCESOS CULTURALES, IDEOLOGICOS Y COMUNICACIONALES')->first()->id;
        $esta = Department::whereName('ESTADISTICA')->first()->id;
        $lati = Department::whereName('ESTUDIOS LATINOAMERICANOS')->first()->id;
        $estu = Department::whereName('ESTUDIOS DE LA POBLACION Y AMBIENTE')->first()->id;
        $anal = Department::whereName('ANALISIS HISTORICO SOCIAL')->first()->id;
        $aeco = Department::whereName('ANALISIS ECONOMICO POLITICO Y DE LA PLANIFICACION')->first()->id;
        $meto = Department::whereName('METODOS')->first()->id;
        $teor = Department::whereName('TEORIA SOCIAL')->first()->id;

        $period = Period::getActiveOne()->id;

        Asignature::create([
            'code'          => '9908',
            'name'          => 'INTRODUCCION A LA SOCIOLOGIA',
            'credits'       => 4,
            'semester'      => 'PRIMERO',
            'period_id'     => $period,
            'department_id' => $teor,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9403',
            'name'          => 'INTRODUCCION A LA ESTADISTICA',
            'credits'       => 5,
            'semester'      => 'PRIMERO',
            'period_id'     => $period,
            'department_id' => $esta,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9611',
            'name'          => 'TALLER DE METODOS I',
            'semester'      => 'PRIMERO',
            'credits'       => 5,
            'period_id'     => $period,
            'department_id' => $meto,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9212',
            'name'          => 'ECONOMIA POLITICA I',
            'credits'       => 3,
            'semester'      => 'PRIMERO',
            'period_id'     => $period,
            'department_id' => $aeco,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9811',
            'name'          => 'TEORIA SOCIAL I',
            'credits'       => 4,
            'semester'      => 'SEGUNDO',
            'period_id'     => $period,
            'department_id' => $teor,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9404',
            'name'          => 'ESTADISTICA DESCRIPTIVA',
            'credits'       => 5,
            'semester'      => 'SEGUNDO',
            'period_id'     => $period,
            'department_id' => $esta,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9612',
            'name'          => 'TALLER DE METODOS II',
            'credits'       => 5,
            'semester'      => 'SEGUNDO',
            'period_id'     => $period,
            'department_id' => $meto,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9213',
            'name'          => 'ECONOMIA POLITICA II',
            'credits'       => 3,
            'semester'      => 'SEGUNDO',
            'period_id'     => $period,
            'department_id' => $aeco,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9812',
            'name'          => 'TEORIA SOCIAL II',
            'credits'       => 4,
            'semester'      => 'TERCERO',
            'period_id'     => $period,
            'department_id' => $teor,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9405',
            'name'          => 'INFERENCIA ESTADISTICA',
            'credits'       => 5,
            'semester'      => 'TERCERO',
            'period_id'     => $period,
            'department_id' => $esta,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9909',
            'name'          => 'SISTEMAS Y PROCESOS HISTORICOS CONTEMPORANEOS',
            'credits'       => 4,
            'semester'      => 'TERCERO',
            'period_id'     => $period,
            'department_id' => $anal,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9613',
            'name'          => 'TALLER DE METODOS II',
            'credits'       => 5,
            'semester'      => 'TERCERO',
            'period_id'     => $period,
            'department_id' => $meto,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9700',
            'name'          => 'PSICOLOGIA',
            'credits'       => 5,
            'semester'      => 'TERCERO',
            'period_id'     => $period,
            'department_id' => $proc,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9910',
            'name'          => 'FORMACION VENEZOLANA I',
            'credits'       => 5,
            'semester'      => 'CUARTO',
            'period_id'     => $period,
            'department_id' => $anal,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9813',
            'name'          => 'TEORIA SOCIAL III',
            'credits'       => 5,
            'semester'      => 'CUARTO',
            'period_id'     => $period,
            'department_id' => $teor,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9614',
            'name'          => 'TALLER DE METODOS CUANTITATIVOS',
            'credits'       => 4,
            'period_id'     => $period,
            'semester'      => 'CUARTO',
            'department_id' => $meto,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9702',
            'name'          => 'PSICOLOGIA SOCIAL',
            'credits'       => 5,
            'semester'      => 'CUARTO',
            'period_id'     => $period,
            'department_id' => $proc,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9814',
            'name'          => 'TEORIA SOCIAL III',
            'credits'       => 4,
            'semester'      => 'CUARTO',
            'period_id'   => $period,
            'department_id' => $teor,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9701',
            'name'          => 'COMUNICACION',
            'credits'       => 4,
            'semester'      => 'QUINTO',
            'period_id'     => $period,
            'department_id' => $proc,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9911',
            'name'          => 'FORMACION VENEZOLANA II',
            'credits'       => 5,
            'semester'      => 'QUINTO',
            'period_id'     => $period,
            'department_id' => $anal,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9912',
            'name'          => 'ANTROPOLOGIA SOCIAL',
            'credits'       => 5,
            'semester'      => 'QUINTO',
            'period_id'     => $period,
            'department_id' => $teor,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9615',
            'name'          => 'TALLER DE METODOS CUALITATIVOS',
            'credits'       => 5,
            'semester'      => 'QUINTO',
            'period_id'     => $period,
            'department_id' => $meto,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9220',
            'name'          => 'ANALISIS DEMOGRAFICO',
            'credits'       => 5,
            'semester'      => 'SEXTO',
            'period_id'     => $period,
            'department_id' => $estu,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9111',
            'name'          => 'OPTATIVA I',
            'credits'       => 4,
            'semester'      => 'SEXTO',
            'period_id'     => $period,
            'department_id' => $meto,
            'type'          => 'OPTATIVA',
        ]);
        Asignature::create([
            'code'          => '9112',
            'name'          => 'OPTATIVA II',
            'credits'       => 5,
            'semester'      => 'SEXTO',
            'period_id'     => $period,
            'department_id' => $esta,
            'type'          => 'OPTATIVA',
        ]);
        Asignature::create([
            'code'          => '9113',
            'name'          => 'OPTATIVA III',
            'credits'       => 4,
            'semester'      => 'SEPTIMO',
            'period_id'     => $period,
            'department_id' => $proc,
            'type'          => 'OPTATIVA',
        ]);
        Asignature::create([
            'code'          => '9119',
            'name'          => 'SEMINARIO DE TESIS',
            'credits'       => 4,
            'semester'      => 'OCTAVO',
            'period_id'     => $period,
            'department_id' => $proc,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9020',
            'name'          => 'TALLER DE INVESTIGACION II',
            'credits'       => 4,
            'semester'      => 'NOVENO',
            'period_id'     => $period,
            'department_id' => $proc,
            'type'          => 'OBLIGATORIA',
        ]);
        Asignature::create([
            'code'          => '9000',
            'name'          => 'TESIS',
            'credits'       => 10,
            'semester'      => 'DECIMO',
            'period_id'     => $period,
            'department_id' => null,
            'type'          => 'OBLIGATORIA',
        ]);
    }
}
