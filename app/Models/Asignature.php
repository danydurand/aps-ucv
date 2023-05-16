<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'department_id',
        'type',
        'presentation',
        'general_objective',
        'themes',
        'purpose',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'department_id' => 'integer',
    ];

    const TYPE_OPTIONS = [
        'M' => 'OBLIGATORIA',
        'O' => 'OPTATIVA'
    ];

    //-------------
    // Attributes
    //-------------
    public function getShortNameAttribute()
    {
        return Str::substr($this->name,0,20);
    }
    public function getInfoCountAttribute()
    {
        $pres = Str::length($this->presentation) >= 20 ? 1 : 0;
    }

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




    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function objectives(): HasMany
    {
        return $this->hasMany(Objective::class);
    }
}
