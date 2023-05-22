<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Professor;
use App\Models\Semester;
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

        $seme = Semester::getActiveOne()->id;

        Professor::create([
            'name'          => 'ANTONIO SUAREZ',
            'semester_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ERLY RUIZ',
            'semester_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSE TAPIA',
            'semester_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ENRIQUE REY',
            'semester_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'LIVIA VARGAS',
            'semester_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'TANIA DELGADO',
            'semester_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'BENJAMIN MARTINEZ',
            'semester_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELIDE HERNANDEZ',
            'semester_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'RICHARD ESCORCHE',
            'semester_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CHELINA SUPULVEDA',
            'semester_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ALEXANDER CAMPOS',
            'semester_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSHUA GONZALEZ',
            'semester_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'VERONICA ZARRAGA',
            'semester_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'REINA SARMIENTO',
            'semester_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CARYNTHIA LEYDENZ',
            'semester_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'EDMUNDO PARDO',
            'semester_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSE MORENO',
            'semester_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSE LOPEZ',
            'semester_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'SAMUEL PEREZ',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MARITZA MARTINEZ',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MARIA LOVERA',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CARLOS VISO',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'LUIS MARCOU',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CARLOS SANVICENTE',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JAVIER BIARDIEU',
            'semester_id'   => $seme,
            'department_id' => $lati,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'GABRIEL SALAZAR',
            'semester_id'   => $seme,
            'department_id' => $lati,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'CARLOS AGELVIS',
            'semester_id'   => $seme,
            'department_id' => $lati,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ROSANGEL ALVAREZ',
            'semester_id'   => $seme,
            'department_id' => $lati,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MIGUEL DENIS',
            'semester_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELISA GRATEROL',
            'semester_id'   => $seme,
            'department_id' => $esta,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JEAN MARQUEZ',
            'semester_id'   => $seme,
            'department_id' => $proc,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELSA RODRIGUEZ',
            'semester_id'   => $seme,
            'department_id' => $proc,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'EDIXELA BURGOS',
            'semester_id'   => $seme,
            'department_id' => $proc,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'OLY MILLAN',
            'semester_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'RICARDO MARCANO',
            'semester_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELEAZAR MUJICA',
            'semester_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'IRAMA LAROSA',
            'semester_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'XAVIER VALENTE',
            'semester_id'   => $seme,
            'department_id' => $aeco,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'BRENDA YEPEZ',
            'semester_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'IGNACIO AVALOS',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ELIZABETH ZAMORA',
            'semester_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ZAIDA LIENDO',
            'semester_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'XIOMARA MARTINEZ',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MAURICIO PHELAN',
            'semester_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'MIGUEL CONTRERAS',
            'semester_id'   => $seme,
            'department_id' => $teor,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JENNIFER ZAPATA',
            'semester_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'ANTONIO PAREDES',
            'semester_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'EMILIO OSORIO',
            'semester_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'DAISY DAMARIO',
            'semester_id'   => $seme,
            'department_id' => $proc,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'XIOMARA QUILARQUE',
            'semester_id'   => $seme,
            'department_id' => $meto,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'FLERIDA RENGIFO',
            'semester_id'   => $seme,
            'department_id' => $estu,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSE HERNANDEZ',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'HUMBERTO DAZA',
            'semester_id'   => $seme,
            'department_id' => $anal,
            'is_active'     => true,
        ]);
    }
}
