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

        $luis_marcou        = Professor::whereName('LUIS MARCOU')->first()->id;
        $maria_lovera       = Professor::whereName('MARIA LOVERA')->first()->id;
        $maritza_martinez   = Professor::whereName('MARITZA MARTINEZ')->first()->id;
        $tibisay_serrada    = Professor::whereName('TIBISAY SERRADA')->first()->id;
        $samuel_perez       = Professor::whereName('SAMUEL PEREZ')->first()->id;
        $carlos_blank       = Professor::whereName('CARLOS BLANK')->first()->id;
        $benjamin_martinez  = Professor::whereName('BENJAMIN MARTINEZ')->first()->id;
        $diego_larrique     = Professor::whereName('DIEGO LARRIQUE')->first()->id;
        $humberto_daza      = Professor::whereName('HUMBERTO DAZA')->first()->id;
        $javier_seoane      = Professor::whereName('JAVIER SEOANE')->first()->id;
        $enrique_rey        = Professor::whereName('ENRIQUE REY')->first()->id;
        $alexander_campo    = Professor::whereName('ALEXANDER CAMPO')->first()->id;
        $wilmer_tellez      = Professor::whereName('WILMER TELLEZ')->first()->id;
        $veronica_zarraga   = Professor::whereName('VERONICA ZARRAGA')->first()->id;
        $erly_ruiz          = Professor::whereName('ERLY RUIZ')->first()->id;
        $miguel_lovera      = Professor::whereName('MIGUEL ANGEL LOVERA')->first()->id;
        $miguel_contreras   = Professor::whereName('MIGUEL A. CONTRERAS')->first()->id;
        $xiomara_martinez   = Professor::whereName('XIOMARA MARTINEZ')->first()->id;
        $xiomara_quilarque  = Professor::whereName('XIOMARA QUILARQUE')->first()->id;
        $edixela_burgos     = Professor::whereName('EDIXELA BURGOS')->first()->id;
        $jessie_blanco      = Professor::whereName('JESSIE BLANCO')->first()->id;
        $maria_hernandez    = Professor::whereName('MARIA HERNANDEZ')->first()->id;
        $javier_biardieu    = Professor::whereName('JAVIER BIARDIEU')->first()->id;
        $carlos_agelvis     = Professor::whereName('CARLOS AGELVIS')->first()->id;
        $rosalgel_alvarez   = Professor::whereName('ROSALGEL ALVAREZ')->first()->id;
        $jose_hernandez     = Professor::whereName('JOSE JULIAN HERNANDEZ')->first()->id;
        $carintia_leydenz   = Professor::whereName('CARINTIA LEYDENZ')->first()->id;
        $brenda_yepez       = Professor::whereName('BRENDA YEPEZ')->first()->id;
        $edmundo_pardo      = Professor::whereName('EDMUNDO PARDO')->first()->id;
        $jose_lopez         = Professor::whereName('JOSE R. LOPEZ')->first()->id;
        $antonio_paredes    = Professor::whereName('ANTONIO PAREDES')->first()->id;
        $flerida_de_rengifo = Professor::whereName('FLERIDA DE RENGIFO')->first()->id;
        $gloria_marreo      = Professor::whereName('GLORIA MARRERO')->first()->id;
        $xavier_valente     = Professor::whereName('XAVIER VALENTE')->first()->id;
        $jean_marquez       = Professor::whereName('JEAN MARQUEZ')->first()->id;
        $carlos_viso        = Professor::whereName('CARLOS VISO')->first()->id;
        $maurio_phelan      = Professor::whereName('MAURICIO PHELAN')->first()->id;
        $elsa_rodriguez     = Professor::whereName('ELSA RODRIGUEZ')->first()->id;


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
            'professor_id' => $carintia_leydenz,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9611',
            'name'         => 'TALLER DE METODOS I',
            'professor_id' => $veronica_zarraga,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9212',
            'name'         => 'ECONOMIA POLITICA I',
            'professor_id' => $enrique_rey,
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
            'professor_id' => $wilmer_tellez,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9213',
            'name'         => 'ECONOMIA POLITICA II',
            'professor_id' => $enrique_rey,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9812',
            'name'         => 'TEORIA SOCIAL II',
            'professor_id' => $miguel_contreras,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9405',
            'name'         => 'INFERENCIA ESTADISTICA',
            'professor_id' => $jose_lopez,
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
            'name'         => 'TALLER DE METODOS II',
            'professor_id' => $alexander_campo,
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
            'code'         => '9210',
            'name'         => 'TEORIA POLITICA',
            'professor_id' => $tibisay_serrada,
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
            'professor_id' => $carlos_viso,
            'is_active'    => true,
            'type'         => 'M',
        ]);
        Asignature::create([
            'code'         => '9614',
            'name'         => 'TALLER DE METODOS CUANTITATIVOS',
            'professor_id' => $maurio_phelan,
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
            'professor_id' => $erly_ruiz,
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
