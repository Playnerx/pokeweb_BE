<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PokemonStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'base_stat', 'effort'
    ];

    public function pokemon(): BelongsTo {
        return $this->belongsTo(Pokemon::class);
    }

    public function stat(): BelongsTo {
        return $this->belongsTo(Stat::class);
    }
}
