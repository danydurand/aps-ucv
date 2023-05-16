<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Objective extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'asignature_id',
        'order',
        'description',
        'content',
        'is_active',
        'books',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'asignature_id' => 'integer',
        'order' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    protected function description(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::upper($value)
        );
    }
    protected function content(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::upper($value)
        );
    }
    protected function books(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::upper($value)
        );
    }

    public function asignature(): BelongsTo
    {
        return $this->belongsTo(Asignature::class);
    }
}
