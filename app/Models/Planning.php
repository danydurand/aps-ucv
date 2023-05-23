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
        'professor_asignature_id',
        'objective_id',
        'estimated_date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                      => 'integer',
        'professor_asignature_id' => 'integer',
        'objective_id'            => 'integer',
        'estimated_date'          => 'date',
    ];

    public function professor_asignature(): BelongsTo
    {
        return $this->belongsTo(ProfessorAsignature::class);
    }

    public function objective(): BelongsTo
    {
        return $this->belongsTo(Objective::class);
    }
}
