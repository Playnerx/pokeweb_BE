<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ability extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier'
    ];

    public function pokemons(): BelongsToMany {
        return $this->belongsToMany(Pokemon::class);
    }

    public function ability_name(): BelongsTo {
        return $this->belongsTo(AbilityName::class);
    }
}
