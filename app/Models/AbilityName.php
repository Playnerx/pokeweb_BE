<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AbilityName extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function ability(): BelongsToMany {
        return $this->belongsToMany(Ability::class);
    }

    public function language(): BelongsToMany {
        return $this->belongsToMany(Language::class);
    }
}
