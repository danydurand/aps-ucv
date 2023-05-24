<?php

namespace Database\Seeders;

use App\Models\Period;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Director Escuela']);
        Role::create(['name' => 'Asistente Director']);
        Role::create(['name' => 'Director Depto']);
        Role::create(['name' => 'Profesor']);
        Role::create(['name' => 'Estudiante']);
    }
}
