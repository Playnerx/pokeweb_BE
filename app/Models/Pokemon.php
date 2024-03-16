<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier', 'species_id', 'height', 'weight'
    ];

    public function species(): BelongsTo {
        return $this->belongsTo(Species::class);
    }

    public function abilities(): BelongsToMany {
        return $this->belongsToMany(Ability::class);
    }
}
