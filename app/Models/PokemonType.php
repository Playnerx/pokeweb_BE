<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PokemonType extends Model
{
    use HasFactory;

    protected $fillable = [
        'slot'
    ];

    public function pokemon(): BelongsTo {
        return $this->belongsTo(Pokemon::class);
    }

    public function type(): BelongsTo {
        return $this->belongsTo(Type::class);
    }
}
