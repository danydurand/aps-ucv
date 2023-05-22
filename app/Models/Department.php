<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Department extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function getShortNameAttribute()
    {
        return Str::substr($this->name,0,20);
    }


    //------------
    // Muttators
    //------------
    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::upper($value)
        );
    }

    public function professors(): HasMany
    {
        return $this->hasMany(Professor::class);
    }

    public function asignatures(): HasMany
    {
        return $this->hasMany(Asignature::class);
    }




}
