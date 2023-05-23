<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Period extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'is_active',
        'is_closed',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'         => 'integer',
        'start_date' => 'date',
        'end_date'   => 'date',
        'is_active'  => 'boolean',
        'is_closed'  => 'boolean',
    ];

    public static function getActiveOne()
    {
        return Period::where('is_active', true)->first();
    }

    //----------------
    // Relationships
    //----------------
    public function professors(): HasMany
    {
        return $this->hasMany(Professor::class);
    }

    public function asignatures(): HasMany
    {
        return $this->hasMany(Asignature::class);
    }


}
