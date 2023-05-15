<?php

namespace Database\Seeders;

use App\Models\Asignature;
use App\Models\Professor;
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

        $antonio_suarez = Professor::where('name', '=', 'ANTONIO SUAREZ')->first()->id;
        $erly_ruiz = Professor::where('name', '=', 'ERLY RUIZ')->first()->id;
        $jose_tapia = Professor::where('name', '=', 'JOSE TAPIA')->first()->id;
        $enrique_rey = Professor::where('name', '=', 'ENRIQUE REY')->first()->id;
        $livia_vargas = Professor::where('name', '=', 'LIVIA VARGAS')->first()->id;
        $tania_delgado = Professor::where('name', '=', 'TANIA DELGADO')->first()->id;
        $benjamin_martinez = Professor::where('name', '=', 'BENJAMIN MARTINEZ')->first()->id;
        $elide_hernandez = Professor::where('name', '=', 'ELIDE HERNANDEZ')->first()->id;
        $richard_escorche = Professor::where('name', '=', 'RICHARD ESCORCHE')->first()->id;
        $chelina_sepulveda = Professor::where('name', '=', 'CHELINA SUPULVEDA')->first()->id;
        $alexander_campos = Professor::where('name', '=', 'ALEXANDER CAMPOS')->first()->id;
        $joshua_gonzalez = Professor::where('name', '=', 'JOSHUA GONZALEZ')->first()->id;
        $veronica_zarraga = Professor::where('name', '=', 'VERONICA ZARRAGA')->first()->id;
        $reina_sarmiento = Professor::where('name', '=', 'REINA SARMIENTO')->first()->id;
        $carynthia_leydenz = Professor::where('name', '=', 'CARYNTHIA LEYDENZ')->first()->id;
        $edmundo_pardo = Professor::where('name', '=', 'EDMUNDO PARDO')->first()->id;
        $jose_moreno = Professor::where('name', '=', 'JOSE MORENO')->first()->id;
        $jose_lopez = Professor::where('name', '=', 'JOSE LOPEZ')->first()->id;
        $samuel_perez = Professor::where('name', '=', 'SAMUEL PEREZ')->first()->id;
        $maritza_martinez = Professor::where('name', '=', 'MARITZA MARTINEZ')->first()->id;
        $maria_lovera = Professor::where('name', '=', 'MARIA LOVERA')->first()->id;
        $carlos_viso = Professor::where('name', '=', 'CARLOS VISO')->first()->id;
        $luis_marcou = Professor::where('name', '=', 'LUIS MARCOU')->first()->id;
        $carlos_sanvicente = Professor::where('name', '=', 'CARLOS SANVICENTE')->first()->id;
        $javier_diardieu = Professor::where('name', '=', 'JAVIER BIARDIEU')->first()->id;
        $gabriel_salazar = Professor::where('name', '=', 'GABRIEL SALAZAR')->first()->id;
        $carlos_agelvis = Professor::where('name', '=', 'CARLOS AGELVIS')->first()->id;
        $rosangel_alvarez = Professor::where('name', '=', 'ROSANGEL ALVAREZ')->first()->id;
        $miguel_denis = Professor::where('name', '=', 'MIGUEL DENIS')->first()->id;
        $elisa_graterol = Professor::where('name', '=', 'ELISA GRATEROL')->first()->id;
        $jean_marquez = Professor::where('name', '=', 'JEAN MARQUEZ')->first()->id;
        $elsa_rodriguez = Professor::where('name', '=', 'ELSA RODRIGUEZ')->first()->id;
        $edixela_burgos = Professor::where('name', '=', 'EDIXELA BURGOS')->first()->id;
        $oly_millan = Professor::where('name', '=', 'OLY MILLAN')->first()->id;
        $ricardo_marcano = Professor::where('name', '=', 'RICARDO MARCANO')->first()->id;
        $eleazar_mujica = Professor::where('name', '=', 'ELEAZAR MUJICA')->first()->id;
        $irama_larosa = Professor::where('name', '=', 'IRAMA LAROSA')->first()->id;
        $xavier_valente = Professor::where('name', '=', 'XAVIER VALENTE')->first()->id;
        $brenda_yepez = Professor::where('name', '=', 'BRENDA YEPEZ')->first()->id;
        $ignacio_avalos = Professor::where('name', '=', 'IGNACIO AVALOS')->first()->id;
        $elizabeth_zamora = Professor::where('name', '=', 'ELIZABETH ZAMORA')->first()->id;
        $zaida_liendo = Professor::where('name', '=', 'ZAIDA LIENDO')->first()->id;
        $xiomara_martinez = Professor::where('name', '=', 'XIOMARA MARTINEZ')->first()->id;
        $mauricio_phelan = Professor::where('name', '=', 'MAURICIO PHELAN')->first()->id;
        $miguel_contreras = Professor::where('name', '=', 'MIGUEL CONTRERAS')->first()->id;
        $jennifer_zapata = Professor::where('name', '=', 'JENNIFER ZAPATA')->first()->id;
        $antonio_paredes = Professor::where('name', '=', 'ANTONIO PAREDES')->first()->id;
        $emilio_osorio = Professor::where('name', '=', 'EMILIO OSORIO')->first()->id;
        $daisy_damario = Professor::where('name', '=', 'DAISY DAMARIO')->first()->id;
        $xiomara_quilarque = Professor::where('name', '=', 'XIOMARA QUILARQUE')->first()->id;
        $flerida_rengifo = Professor::where('name', '=', 'FLERIDA RENGIFO')->first()->id;
        $jose_hernandez = Professor::where('name', '=', 'JOSE HERNANDEZ')->first()->id;
        $humberto_daza = Professor::where('name', '=', 'HUMBERTO DAZA')->first()->id;


        Asignature::create([
            'code'         => '9908',
            'name'         => 'INTRODUCCION A LA SOCIOLOGIA',
            'professor_id' => $miguel_contreras,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9403',
            'name'         => 'INTRODUCCION A LA ESTADISTICA',
            'professor_id' => $carynthia_leydenz,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9611',
            'name'         => 'TALLER DE METODOS I',
            'professor_id' => $elide_hernandez,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9212',
            'name'         => 'ECONOMIA POLITICA I',
            'professor_id' => $oly_millan,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9811',
            'name'         => 'TEORIA SOCIAL I',
            'professor_id' => $erly_ruiz,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9404',
            'name'         => 'ESTADISTICA DESCRIPTIVA',
            'professor_id' => $edmundo_pardo,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9612',
            'name'         => 'TALLER DE METODOS II',
            'professor_id' => $chelina_sepulveda,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9213',
            'name'         => 'ECONOMIA POLITICA II',
            'professor_id' => $eleazar_mujica,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9812',
            'name'         => 'TEORIA SOCIAL II',
            'professor_id' => $jose_tapia,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9405',
            'name'         => 'INFERENCIA ESTADISTICA',
            'professor_id' => $jose_moreno,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9909',
            'name'         => 'SISTEMAS Y PROCESOS HISTORICOS CONTEMPORANEOS',
            'professor_id' => $luis_marcou,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9613',
            'name'         => 'TALLER DE METODOS III',
            'professor_id' => $alexander_campos,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9700',
            'name'         => 'PSICOLOGIA',
            'professor_id' => $jean_marquez,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9910',
            'name'         => 'FORMACION VENEZOLANA I',
            'professor_id' => $maria_lovera,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9813',
            'name'         => 'TEORIA SOCIAL III',
            'professor_id' => $enrique_rey,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9614',
            'name'         => 'TALLER DE METODOS CUANTITATIVOS',
            'professor_id' => $joshua_gonzalez,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9702',
            'name'         => 'PSICOLOGIA SOCIAL',
            'professor_id' => $elsa_rodriguez,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9814',
            'name'         => 'TEORIA SOCIAL IV',
            'professor_id' => $livia_vargas,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9701',
            'name'         => 'COMUNICACION',
            'professor_id' => $edixela_burgos,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9911',
            'name'         => 'FORMACION VENEZOLANA II',
            'professor_id' => $carlos_viso,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9912',
            'name'         => 'ANTROPOLOGIA SOCIAL',
            'professor_id' => $benjamin_martinez,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9615',
            'name'         => 'TALLER DE METODOS CUALITATIVOS',
            'professor_id' => $veronica_zarraga,
            'is_active'    => true,
            'type'         => 'M',
        ]);
    }
}
