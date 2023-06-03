<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProfessorAsignature extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'period_id',
        'profressor_id',
        'asignature_id',
        'section',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'period_id'     => 'integer',
        'profressor_id' => 'integer',
        'asignature_id' => 'integer',
    ];

    public $appends = [
        'asignature_name',
    ];

    public function getAsignatureNameAttribute()
    {
        return $this->asignature->name;
    }


    //----------------
    // Relationships
    //----------------
    public function plannings(): HasMany
    {
        return $this->hasMany(Planning::class);
    }

    public function period(): BelongsTo
    {
        return $this->belongsTo(Period::class);
    }

    public function asignature(): BelongsTo
    {
        return $this->belongsTo(Asignature::class);
    }

    public function profressor(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }
}
