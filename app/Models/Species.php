<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Species extends Model
{
    use HasFactory;

    protected $fillable = [
        'generation_id', 'evolution_chain_id', 'gender_rate'
    ];

    public function pokemons(): HasMany {
        return $this->hasMany(Pokemon::class);
    }
}
