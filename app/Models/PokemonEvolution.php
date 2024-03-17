<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PokemonEvolution extends Model
{
    use HasFactory;

    protected $fillable = [
        'minimum_level', 'time_of_day'
    ];

    public function evolution_trigger(): BelongsTo {
        return $this->belongsTo(EvolutionTrigger::class);
    }

    public function gender(): BelongsTo {
        return $this->belongsTo(Gender::class);
    }
}
