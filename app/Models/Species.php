<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Species extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender_rate'
    ];

    public function pokemons(): HasMany {
        return $this->hasMany(Pokemon::class);
    }

    public function generation(): BelongsToMany {
        return $this->belongsToMany(Generation::class);
    }

    public function evolutionchain(): BelongsTo {
        return $this->belongsTo(EvolutionChain::class);
    }
}
