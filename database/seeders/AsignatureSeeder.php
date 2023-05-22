<?php

namespace Database\Seeders;

use App\Models\Asignature;
use App\Models\Department;
use App\Models\Professor;
use App\Models\Semester;
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

        $seme = Semester::getActiveOne()->id;

        Asignature::create([
            'code'          => '9908',
            'name'          => 'INTRODUCCION A LA SOCIOLOGIA',
            'credits'       => 4,
            'semester_id'   => $seme,
            'department_id' => $teor,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9403',
            'name'          => 'INTRODUCCION A LA ESTADISTICA',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $esta,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9611',
            'name'          => 'TALLER DE METODOS I',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $meto,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9212',
            'name'          => 'ECONOMIA POLITICA I',
            'credits'       => 3,
            'semester_id'   => $seme,
            'department_id' => $aeco,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9811',
            'name'          => 'TEORIA SOCIAL I',
            'credits'       => 4,
            'semester_id'   => $seme,
            'department_id' => $teor,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9404',
            'name'          => 'ESTADISTICA DESCRIPTIVA',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $esta,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9612',
            'name'          => 'TALLER DE METODOS II',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $meto,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9213',
            'name'          => 'ECONOMIA POLITICA II',
            'credits'       => 3,
            'semester_id'   => $seme,
            'department_id' => $aeco,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9812',
            'name'          => 'TEORIA SOCIAL II',
            'credits'       => 4,
            'semester_id'   => $seme,
            'department_id' => $teor,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9405',
            'name'          => 'INFERENCIA ESTADISTICA',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $esta,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9909',
            'name'          => 'SISTEMAS Y PROCESOS HISTORICOS CONTEMPORANEOS',
            'credits'       => 4,
            'semester_id'   => $seme,
            'department_id' => $anal,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9613',
            'name'          => 'TALLER DE METODOS III',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $meto,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9700',
            'name'          => 'PSICOLOGIA',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $proc,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9910',
            'name'          => 'FORMACION VENEZOLANA I',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $anal,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9813',
            'name'          => 'TEORIA SOCIAL III',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $teor,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9614',
            'name'          => 'TALLER DE METODOS CUANTITATIVOS',
            'credits'       => 4,
            'semester_id'   => $seme,
            'department_id' => $meto,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9702',
            'name'          => 'PSICOLOGIA SOCIAL',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $proc,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9814',
            'name'          => 'TEORIA SOCIAL IV',
            'credits'       => 4,
            'semester_id'   => $seme,
            'department_id' => $teor,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9701',
            'name'          => 'COMUNICACION',
            'credits'       => 4,
            'semester_id'   => $seme,
            'department_id' => $proc,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9911',
            'name'          => 'FORMACION VENEZOLANA II',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $anal,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9912',
            'name'          => 'ANTROPOLOGIA SOCIAL',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $teor,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9615',
            'name'          => 'TALLER DE METODOS CUALITATIVOS',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $meto,
            'type'          => 'M',
        ]);
        Asignature::create([
            'code'          => '9191',
            'name'          => 'OPTATIVA 1',
            'credits'       => 4,
            'semester_id'   => $seme,
            'department_id' => $meto,
            'type'          => 'O',
        ]);
        Asignature::create([
            'code'          => '9292',
            'name'          => 'OPTATIVA 2',
            'credits'       => 5,
            'semester_id'   => $seme,
            'department_id' => $esta,
            'type'          => 'O',
        ]);
        Asignature::create([
            'code'          => '9393',
            'name'          => 'OPTATIVA 3',
            'credits'       => 4,
            'semester_id'   => $seme,
            'department_id' => $proc,
            'type'          => 'O',
        ]);
    }
}
