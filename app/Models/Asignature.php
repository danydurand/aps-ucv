<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asignature extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'professor_id',
        'is_active',
        'type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'           => 'integer',
        'professor_id' => 'integer',
        'is_active'    => 'boolean',
    ];

    public $appends = [
        'objectives_count',
        'sections_count'
    ];

    //---------
    // Scopes
    //---------
    public function scopeActives($query)
    {
        return $query->where('is_active', true);
    }


    //------------------------
    // Attribute definitions
    //------------------------
    public function getObjectivesCountAttribute()
    {
        return $this->objectives()->count();
    }
    public function getSectionsCountAttribute()
    {
        return $this->sections()->count();
    }

    //-----------------
    // Relationships
    //-----------------

    public function objectives(): HasMany
    {
        return $this->hasMany(Objective::class);
    }

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }


    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }
}
