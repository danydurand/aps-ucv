<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const TYPE_OPTIONS = [
        'ADMIN'            => 'ADMIN',
        'DIRECTOR ESCUELA' => 'DIRECTOR ESCUELA',
        'ASISTENTE DIR.'   => 'ASIST DIR. ESC.',
        'DIRECTOR DEPTO'   => 'DIRECTOR DEPTO',
        'PROFESOR'         => 'PROFESOR',
        'ESTUDIANTE'       => 'ESTUDIANTE',
    ];

    //----------------
    // Relationships
    //----------------
    // public function roles(): HasMany
    // {
    //     return $this->hasMany(Role::class)
    //         ->whereNotIn('name', ['Admin']);
    // }


}
