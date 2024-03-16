<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PokemonAbility extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_hidden'
    ];

    public function pokemon(): BelongsTo {
        return $this->belongsTo(Pokemon::class);
    }

    public function ability(): BelongsTo {
        return $this->belongsTo(Ability::class);
    }

    public function language(): BelongsTo {
        return $this->belongsTo(Language::class);
    }
}
