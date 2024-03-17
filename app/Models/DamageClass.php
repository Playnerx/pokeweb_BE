<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DamageClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier'
    ];

    public function stat(): BelongsToMany {
        return $this->belongsToMany(Stat::class);
    }
}
