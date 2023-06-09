<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

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
        'credits',
        'semester',
        'period_id',
        'department_id',
        'type',
        'presentation',
        'general_objective',
        'themes',
        'purpose',
        'info_count',
        'objectives_count',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'               => 'integer',
        'department_id'    => 'integer',
        'objectives_count' => 'integer',
    ];

    const TYPE_OPTIONS = [
        'OBLIGATORIA' => 'OBLIGATORIA',
        'OPTATIVA'    => 'OPTATIVA'
    ];

    const SEMESTER_OPTIONS = [
        'PRIMERO' => 'PRIMERO',
        'SEGUNDO' => 'SEGUNDO',
        'TERCERO' => 'TERCERO',
        'CUARTO'  => 'CUARTO',
        'QUINTO'  => 'QUINTO',
        'SEXTO'   => 'SEXTO',
        'SEPTIMO' => 'SEPTIMO',
        'OCTAVO'  => 'OCTAVO',
        'NOVENO'  => 'NOVENO',
        'DECIMO'  => 'DECIMO',
    ];

    //---------
    // Scopes
    //---------
    public function scopeFromActivePeriod($query)
    {
        $seme = Period::getActiveOne()->id;
        return $query->where('period_id', $seme);
    }

    //-------------
    // Attributes
    //-------------
    public function getTypeNameAttribute()
    {
        return Asignature::TYPE_OPTIONS[$this->type];
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::upper($value)
        );
    }
    protected function presentation(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::upper($value)
        );
    }
    protected function generalObjective(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::upper($value)
        );
    }
    protected function themes(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::upper($value)
        );
    }
    protected function purpose(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::upper($value)
        );
    }




    public function professors(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }
    public function period(): BelongsTo
    {
        return $this->belongsTo(Period::class);
    }
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function objectives(): HasMany
    {
        return $this->hasMany(Objective::class);
    }
}
