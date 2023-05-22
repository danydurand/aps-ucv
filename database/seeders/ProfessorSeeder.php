<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Professor;
use App\Models\Period;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfessorSeeder extends Seeder
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

        $seme = Period::getActiveOne()->id;

        Professor::create([
            'name'          => 'ANTONIO SUAREZ',
            'period_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ERLY RUIZ',
            'period_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSE TAPIA',
            'period_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ENRIQUE REY',
            'period_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'LIVIA VARGAS',
            'period_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'TANIA DELGADO',
            'period_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'BENJAMIN MARTINEZ',
            'period_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELIDE HERNANDEZ',
            'period_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'RICHARD ESCORCHE',
            'period_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CHELINA SUPULVEDA',
            'period_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ALEXANDER CAMPOS',
            'period_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSHUA GONZALEZ',
            'period_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'VERONICA ZARRAGA',
            'period_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'REINA SARMIENTO',
            'period_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CARYNTHIA LEYDENZ',
            'period_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'EDMUNDO PARDO',
            'period_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSE MORENO',
            'period_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSE LOPEZ',
            'period_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'SAMUEL PEREZ',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MARITZA MARTINEZ',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MARIA LOVERA',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CARLOS VISO',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'LUIS MARCOU',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CARLOS SANVICENTE',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JAVIER BIARDIEU',
            'period_id'   => $seme,
            'department_id' => $lati,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'GABRIEL SALAZAR',
            'period_id'   => $seme,
            'department_id' => $lati,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CARLOS AGELVIS',
            'period_id'   => $seme,
            'department_id' => $lati,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ROSANGEL ALVAREZ',
            'period_id'   => $seme,
            'department_id' => $lati,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MIGUEL DENIS',
            'period_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELISA GRATEROL',
            'period_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JEAN MARQUEZ',
            'period_id'   => $seme,
            'department_id' => $proc,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELSA RODRIGUEZ',
            'period_id'   => $seme,
            'department_id' => $proc,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'EDIXELA BURGOS',
            'period_id'   => $seme,
            'department_id' => $proc,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'OLY MILLAN',
            'period_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'RICARDO MARCANO',
            'period_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELEAZAR MUJICA',
            'period_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'IRAMA LAROSA',
            'period_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'XAVIER VALENTE',
            'period_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'BRENDA YEPEZ',
            'period_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'IGNACIO AVALOS',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELIZABETH ZAMORA',
            'period_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ZAIDA LIENDO',
            'period_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'XIOMARA MARTINEZ',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MAURICIO PHELAN',
            'period_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MIGUEL CONTRERAS',
            'period_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JENNIFER ZAPATA',
            'period_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ANTONIO PAREDES',
            'period_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'EMILIO OSORIO',
            'period_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'DAISY DAMARIO',
            'period_id'   => $seme,
            'department_id' => $proc,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'XIOMARA QUILARQUE',
            'period_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'FLERIDA RENGIFO',
            'period_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSE HERNANDEZ',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'HUMBERTO DAZA',
            'period_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
    }
}
