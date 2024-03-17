<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier'
    ];

    public function generation(): BelongsTo {
        return $this->belongsTo(Generation::class);
    }

    public function type_name(): BelongsTo {
        return $this->belongsTo(TypeName::class);
    }

    public function damage_type(): BelongsToMany {
        return $this->belongsToMany(TypeEfficacy::class);
    }

    public function target_type(): BelongsToMany {
        return $this->belongsToMany(TypeEfficacy::class);
    }

    public function pokemon_type(): BelongsToMany {
        return $this->belongsToMany(PokemonType::class);
    }
}
