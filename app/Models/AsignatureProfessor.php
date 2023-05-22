<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AsignatureProfessor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'asignature_id',
        'profressor_id',
        'section',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'asignature_id' => 'integer',
        'profressor_id' => 'integer',
    ];

    public function asignature(): BelongsTo
    {
        return $this->belongsTo(Asignature::class);
    }

    public function profressor(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }
}
