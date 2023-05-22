<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Professor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'period_id',
        'department_id',
        'email',
        'password',
        'is_active',
        'id_document',
        'phones',
        'comments',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'department_id' => 'integer',
        'is_active'     => 'boolean',
    ];

    //---------
    // Scopes
    //---------
    public function scopeFromActivePeriod($query)
    {
        $seme = Period::getActiveOne()->id;
        return $query->where('period_id', $seme);
    }

    //----------------
    // Relationships
    //----------------
    public function asignatures(): BelongsToMany
    {
        return $this->belongsToMany(Asignature::class);
    }

    public function period(): BelongsTo
    {
        return $this->belongsTo(Period::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
