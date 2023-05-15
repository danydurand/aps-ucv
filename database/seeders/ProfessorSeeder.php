<?php

namespace Database\Seeders;

use App\Models\Professor;
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
        Professor::create([ 'name' => 'LUIS MARCOU', 'is_active' => true, ]);
        Professor::create([ 'name' => 'MARIA LOVERA', 'is_active' => true, ]);
        Professor::create([ 'name' => 'MARITZA MARTINEZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'TIBISAY SERRADA', 'is_active' => true, ]);
        Professor::create([ 'name' => 'SAMUEL PEREZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'CARLOS BLANK', 'is_active' => true, ]);
        Professor::create([ 'name' => 'BENJAMIN MARTINEZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'DIEGO LARRIQUE', 'is_active' => true, ]);
        Professor::create([ 'name' => 'HUMBERTO DAZA', 'is_active' => true, ]);
        Professor::create([ 'name' => 'JAVIER SEOANE', 'is_active' => true, ]);
        Professor::create([ 'name' => 'ENRIQUE REY', 'is_active' => true, ]);
        Professor::create([ 'name' => 'ALEXANDER CAMPO', 'is_active' => true, ]);
        Professor::create([ 'name' => 'WILMER TELLEZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'VERONICA ZARRAGA', 'is_active' => true, ]);
        Professor::create([ 'name' => 'ERLY RUIZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'MIGUEL ANGEL LOVERA', 'is_active' => true, ]);
        Professor::create([ 'name' => 'MIGUEL A. CONTRERAS', 'is_active' => true, ]);
        Professor::create([ 'name' => 'XIOMARA MARTINEZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'XIOMARA QUILARQUE', 'is_active' => true, ]);
        Professor::create([ 'name' => 'EDIXELA BURGOS', 'is_active' => true, ]);
        Professor::create([ 'name' => 'JESSIE BLANCO', 'is_active' => true, ]);
        Professor::create([ 'name' => 'MARIA HERNANDEZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'JAVIER BIARDIEU', 'is_active' => true, ]);
        Professor::create([ 'name' => 'CARLOS AGELVIS', 'is_active' => true, ]);
        Professor::create([ 'name' => 'ROSALGEL ALVAREZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'JOSE JULIAN HERNANDEZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'CARINTIA LEYDENZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'BRENDA YEPEZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'EDMUNDO PARDO', 'is_active' => true, ]);
        Professor::create([ 'name' => 'JOSE R. LOPEZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'ANTONIO PAREDES', 'is_active' => true, ]);
        Professor::create([ 'name' => 'FLERIDA DE RENGIFO', 'is_active' => true, ]);
        Professor::create([ 'name' => 'GLORIA MARRERO', 'is_active' => true, ]);
        Professor::create([ 'name' => 'XAVIER VALENTE', 'is_active' => true, ]);
        Professor::create([ 'name' => 'JEAN MARQUEZ', 'is_active' => true, ]);
        Professor::create([ 'name' => 'CARLOS VISO', 'is_active' => true, ]);
        Professor::create([ 'name' => 'MAURICIO PHELAN', 'is_active' => true, ]);
        Professor::create([ 'name' => 'ELSA RODRIGUEZ', 'is_active' => true, ]);
    }
}
