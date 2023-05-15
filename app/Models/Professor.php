<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'is_active',
        'id_document',
        'comments',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'        => 'integer',
        'is_active' => 'boolean',
    ];

    public $appends = [
        'asignatures_count',
    ];

    //------------------------
    // Attribute definitions
    //------------------------
    public function getAsignaturesCountAttribute()
    {
        return $this->asignatures()->count();
    }

    //-----------------
    // Relationships
    //-----------------
    public function asignatures(): HasMany
    {
        return $this->hasMany(Asignature::class);
    }

}
