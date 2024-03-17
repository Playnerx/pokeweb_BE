<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EvolutionTrigger extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier'
    ];

    public function evolution_trigger_prose(): BelongsToMany {
        return $this->belongsToMany(EvolutionTriggerProse::class);
    }
    
    public function pokemon_evolution(): BelongsToMany {
        return $this->belongsToMany(PokemonEvolution::class);
    }
}
