<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class StatName extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function stat(): BelongsToMany {
        return $this->belongsToMany(Stat::class);
    }

    public function language(): BelongsToMany {
        return $this->belongsToMany(Language::class);
    }
}
