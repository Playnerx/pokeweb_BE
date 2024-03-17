<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier'
    ];

    public function pokemon_evolution(): BelongsToMany {
        return $this->belongsToMany(PokemonEvolution::class);
    }
}
