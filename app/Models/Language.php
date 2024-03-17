<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'iso639', 'iso3166', 'identifier', 'official', 'order'
    ];

    public function language_name(): BelongsTo {
        return $this->belongsTo(LanguageNames::class);
    }

    public function ability_name(): BelongsTo {
        return $this->belongsTo(AbilityName::class);
    }

    public function type_name(): BelongsTo {
        return $this->belongsTo(TypeName::class);
    }

    public function stat_name(): BelongsTo {
        return $this->belongsTo(StatName::class);
    }

    public function egg_groups_prose(): BelongsTo {
        return $this->belongsTo(EggGroupProse::class);
    }

    public function evolution_trigger_prose(): BelongsTo {
        return $this->belongsTo(EvolutionTriggerProse::class);
    }
}
