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

        $period = Period::getActiveOne()->id;

        Professor::create([
            'name'          => 'ANTONIO SUAREZ',
            'period_id'     => $period,
            'department_id' => $teor,
            'is_active'     => true,
            'email'         => 'antonio.suarez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ERLY RUIZ',
            'period_id'     => $period,
            'department_id' => $teor,
            'is_active'     => true,
            'email'         => 'erly.ruiz@gmail.com',
        ]);
        Professor::create([
            'name'          => 'JOSE TAPIA',
            'period_id'     => $period,
            'department_id' => $teor,
            'is_active'     => true,
            'email'         => 'jose.tapia@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ENRIQUE REY',
            'period_id'     => $period,
            'department_id' => $teor,
            'is_active'     => true,
            'email'         => 'enrique.rey@gmail.com',
        ]);
        Professor::create([
            'name'          => 'LIVIA VARGAS',
            'period_id'     => $period,
            'department_id' => $teor,
            'is_active'     => true,
            'email'         => 'livia.vargas@gmail.com',
        ]);
        Professor::create([
            'name'          => 'TANIA DELGADO',
            'period_id'     => $period,
            'department_id' => $teor,
            'is_active'     => true,
            'email'         => 'tania.delgado@gmail.com',
        ]);
        Professor::create([
            'name'          => 'BENJAMIN MARTINEZ',
            'period_id'     => $period,
            'department_id' => $teor,
            'is_active'     => true,
            'email'         => 'benjamin.martinez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ELIDE HERNANDEZ',
            'period_id'     => $period,
            'department_id' => $meto,
            'is_active'     => true,
            'email'         => 'elide.hernandez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'RICHARD ESCORCHE',
            'period_id'     => $period,
            'department_id' => $meto,
            'is_active'     => true,
            'email'         => 'richard.escorche@gmail.com',
        ]);
        Professor::create([
            'name'          => 'CHELINA SUPULVEDA',
            'period_id'     => $period,
            'department_id' => $meto,
            'is_active'     => true,
            'email'         => 'chelina.sepulveda@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ALEXANDER CAMPOS',
            'period_id'     => $period,
            'department_id' => $meto,
            'is_active'     => true,
            'email'         => 'alexander.campos@gmail.com',
        ]);
        Professor::create([
            'name'          => 'JOSHUA GONZALEZ',
            'period_id'     => $period,
            'department_id' => $meto,
            'is_active'     => true,
            'email'         => 'joshua.gonzalez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'VERONICA ZARRAGA',
            'period_id'     => $period,
            'department_id' => $meto,
            'is_active'     => true,
            'email'         => 'veronica.zarraga@gmail.com',
        ]);
        Professor::create([
            'name'          => 'REINA SARMIENTO',
            'period_id'     => $period,
            'department_id' => $esta,
            'is_active'     => true,
            'email'         => 'reina.sarmiento@gmail.com',
        ]);
        Professor::create([
            'name'          => 'CARYNTHIA LEYDENZ',
            'period_id'     => $period,
            'department_id' => $esta,
            'is_active'     => true,
            'email'         => 'carynthia.leydenz@gmail.com',
        ]);
        Professor::create([
            'name'          => 'EDMUNDO PARDO',
            'period_id'     => $period,
            'department_id' => $esta,
            'is_active'     => true,
            'email'         => 'edmundo.pardo@gmail.com',
        ]);
        Professor::create([
            'name'          => 'JOSE MORENO',
            'period_id'     => $period,
            'department_id' => $esta,
            'is_active'     => true,
            'email'         => 'jose.moreno@gmail.com',
        ]);
        Professor::create([
            'name'          => 'JOSE LOPEZ',
            'period_id'     => $period,
            'department_id' => $esta,
            'is_active'     => true,
            'email'         => 'jose.lopez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'SAMUEL PEREZ',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'samuel.perez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'MARITZA MARTINEZ',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'maritza.martinez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'MARIA LOVERA',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'maria.lovera@gmail.com',
        ]);
        Professor::create([
            'name'          => 'CARLOS VISO',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'carlos.viso@gmail.com',
        ]);
        Professor::create([
            'name'          => 'LUIS MARCOU',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'luis.marcou@gmail.com',
        ]);
        Professor::create([
            'name'          => 'CARLOS SANVICENTE',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'carlos.sanvicente@gmail.com',
        ]);
        Professor::create([
            'name'          => 'JAVIER BIARDIEU',
            'period_id'     => $period,
            'department_id' => $lati,
            'is_active'     => true,
            'email'         => 'javier.biardieu@gmail.com',
        ]);
        Professor::create([
            'name'          => 'GABRIEL SALAZAR',
            'period_id'     => $period,
            'department_id' => $lati,
            'is_active'     => true,
            'email'         => 'gabriel.salazar@gmail.com',
        ]);
        Professor::create([
            'name'          => 'CARLOS AGELVIS',
            'period_id'     => $period,
            'department_id' => $lati,
            'is_active'     => true,
            'email'         => 'carlos.agelvis@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ROSANGEL ALVAREZ',
            'period_id'     => $period,
            'department_id' => $lati,
            'is_active'     => true,
            'email'         => 'rosangel.alvarez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'MIGUEL DENIS',
            'period_id'     => $period,
            'department_id' => $estu,
            'is_active'     => true,
            'email'         => 'miguel.denis@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ELISA GRATEROL',
            'period_id'     => $period,
            'department_id' => $esta,
            'is_active'     => true,
            'email'         => 'elisa.graterol@gmail.com',
        ]);
        Professor::create([
            'name'          => 'JEAN MARQUEZ',
            'period_id'     => $period,
            'department_id' => $proc,
            'is_active'     => true,
            'email'         => 'jean.marquez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ELSA RODRIGUEZ',
            'period_id'     => $period,
            'department_id' => $proc,
            'is_active'     => true,
            'email'         => 'elsa.rodriguez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'EDIXELA BURGOS',
            'period_id'     => $period,
            'department_id' => $proc,
            'is_active'     => true,
            'email'         => 'edixela.burgos@gmail.com',
        ]);
        Professor::create([
            'name'          => 'OLY MILLAN',
            'period_id'     => $period,
            'department_id' => $aeco,
            'is_active'     => true,
            'email'         => 'oly.millan@gmail.com',
        ]);
        Professor::create([
            'name'          => 'RICARDO MARCANO',
            'period_id'     => $period,
            'department_id' => $aeco,
            'is_active'     => true,
            'email'         => 'ricardo.marcano@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ELEAZAR MUJICA',
            'period_id'     => $period,
            'department_id' => $aeco,
            'is_active'     => true,
            'email'         => 'eleazar.mujica@gmail.com',
        ]);
        Professor::create([
            'name'          => 'IRAMA LAROSA',
            'period_id'     => $period,
            'department_id' => $aeco,
            'is_active'     => true,
            'email'         => 'irma.larosa@gmail.com',
        ]);
        Professor::create([
            'name'          => 'XAVIER VALENTE',
            'period_id'     => $period,
            'department_id' => $aeco,
            'is_active'     => true,
            'email'         => 'xavier.valiente@gmail.com',
        ]);
        Professor::create([
            'name'          => 'BRENDA YEPEZ',
            'period_id'     => $period,
            'department_id' => $estu,
            'is_active'     => true,
            'email'         => 'brenda.yepez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'IGNACIO AVALOS',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'ignacio.avalos@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ELIZABETH ZAMORA',
            'period_id'     => $period,
            'department_id' => $estu,
            'is_active'     => true,
            'email'         => 'elizabeth.zamora@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ZAIDA LIENDO',
            'period_id'     => $period,
            'department_id' => $estu,
            'is_active'     => true,
            'email'         => 'zaida.liendo@gmail.com',
        ]);
        Professor::create([
            'name'          => 'XIOMARA MARTINEZ',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'xiomara.martinez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'MAURICIO PHELAN',
            'period_id'     => $period,
            'department_id' => $meto,
            'is_active'     => true,
            'email'         => 'mauricio.phelan@gmail.com',
        ]);
        Professor::create([
            'name'          => 'MIGUEL CONTRERAS',
            'period_id'     => $period,
            'department_id' => $teor,
            'is_active'     => true,
            'email'         => 'miguel.contreras@gmail.com',
        ]);
        Professor::create([
            'name'          => 'JENNIFER ZAPATA',
            'period_id'     => $period,
            'department_id' => $estu,
            'is_active'     => true,
            'email'         => 'jennifer.zapata@gmail.com',
        ]);
        Professor::create([
            'name'          => 'ANTONIO PAREDES',
            'period_id'     => $period,
            'department_id' => $estu,
            'is_active'     => true,
            'email'         => 'antonio.paredes@gmail.com',
        ]);
        Professor::create([
            'name'          => 'EMILIO OSORIO',
            'period_id'     => $period,
            'department_id' => $estu,
            'is_active'     => true,
            'email'         => 'emilio.osorio@gmail.com',
        ]);
        Professor::create([
            'name'          => 'DAISY DAMARIO',
            'period_id'     => $period,
            'department_id' => $proc,
            'is_active'     => true,
            'email'         => 'daisy.damario@gmail.com',
        ]);
        Professor::create([
            'name'          => 'XIOMARA QUILARQUE',
            'period_id'     => $period,
            'department_id' => $meto,
            'email'         => 'xiomara.quilarque@gmail.com',
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'FLERIDA RENGIFO',
            'period_id'     => $period,
            'department_id' => $estu,
            'email'         => 'flerida.rengifo@gmail.com',
            'is_active'     => true,
        ]);
        Professor::create([
            'name'          => 'JOSE HERNANDEZ',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'jose.hernandez@gmail.com',
        ]);
        Professor::create([
            'name'          => 'HUMBERTO DAZA',
            'period_id'     => $period,
            'department_id' => $anal,
            'is_active'     => true,
            'email'         => 'humberto.daza@gmail.com',
        ]);
    }
}
