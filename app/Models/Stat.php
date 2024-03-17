<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Stat extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier', 'is_battle_only', 'game_index'
    ];

    public function damage_class(): BelongsToMany {
        return $this->belongsToMany(DamageClass::class);
    }

    public function pokemon_stat(): BelongsToMany {
        return $this->belongsToMany(PokemonStat::class);
    }

    public function stat_name(): BelongsTo {
        return $this->belongsTo(StatName::class);
    }
}
