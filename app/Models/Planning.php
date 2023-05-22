<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Planning extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'semester_id',
        'asignature_id',
        'professor_id',
        'objective_id',
        'estimated_date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'semester_id' => 'integer',
        'asignature_id' => 'integer',
        'professor_id' => 'integer',
        'objective_id' => 'integer',
        'estimated_date' => 'date',
    ];

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }

    public function asignature(): BelongsTo
    {
        return $this->belongsTo(Asignature::class);
    }

    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }

    public function objective(): BelongsTo
    {
        return $this->belongsTo(Objective::class);
    }
}
