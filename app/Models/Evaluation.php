<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Evaluation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'professor_asignature_id',
        'objectives',
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
        'id'                      => 'integer',
        'professor_asignature_id' => 'integer',
        'percentage'              => 'decimal:2',
        'points'                  => 'decimal:2',
    ];

    protected function evaluation_way(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => strtoupper($value)
        );
    }

    //---------------
    // Relationships
    //---------------
    public function professor_asignature(): BelongsTo
    {
        return $this->belongsTo(ProfessorAsignature::class);
    }
}
