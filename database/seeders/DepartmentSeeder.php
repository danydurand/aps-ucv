<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([ 'name' => 'PROCESOS CULTURALES, IDEOLOGICOS Y COMUNICACIONALES']);
        Department::create([ 'name' => 'ESTADISTICA']);
        Department::create([ 'name' => 'ESTUDIOS LATINOAMERICANOS']);
        Department::create([ 'name' => 'ESTUDIOS DE LA POBLACION Y AMBIENTE']);
        Department::create([ 'name' => 'ANALISIS HISTORICO SOCIAL']);
        Department::create([ 'name' => 'ANALISIS ECONOMICO POLITICO Y DE LA PLANIFICACION']);
        Department::create([ 'name' => 'METODOS']);
        Department::create([ 'name' => 'TEORIA SOCIAL']);
    }
}
