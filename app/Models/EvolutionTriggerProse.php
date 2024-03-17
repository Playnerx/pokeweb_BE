<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EvolutionTriggerProse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function evolution_trigger(): BelongsTo {
        return $this->belongsTo(EvolutionTrigger::class);
    }

    public function local_language(): BelongsTo {
        return $this->belongsTo(Language::class);
    }
}
