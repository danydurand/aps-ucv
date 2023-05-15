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
        'objective_id',
        'start_date',
        'end_date',
        'evaluation_way',
        'percentage',
        'points',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'semester_id'   => 'integer',
        'asignature_id' => 'integer',
        'objective_id'  => 'integer',
        'start_date'    => 'date',
        'end_date'      => 'date',
        'percentage'    => 'decimal:2',
        'points'        => 'decimal:2',
    ];

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }

    public function asignature(): BelongsTo
    {
        return $this->belongsTo(Asignature::class);
    }

    public function objective(): BelongsTo
    {
        return $this->belongsTo(Objective::class);
    }
}
