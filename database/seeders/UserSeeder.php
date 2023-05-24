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

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::whereName('admin')->first();
        if (!$admin) {
            User::create([
                'name'              => 'admin',
                'email'             => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'remember_token'    => Str::random(10),
                'is_admin'          => true,
            ]);
        }

        $professor_role = Role::where('name','Profesor')->first()->id;
        $professors     = Professor::fromActivePeriod()->get();
        foreach ($professors as $professor) {
            $email = strlen($professor->email) ? $professor->email : 'profesor'.$professor->id.'@ucv.com';
            User::create([
                'name'              => $professor->name,
                'email'             => $email,
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
                'remember_token'    => Str::random(10),
                'is_admin'          => false,
                'type'              => 'PROFESOR',
                'entity_id'         => $professor->id,
            ])->assignRole($professor_role);
        }
    }
}
