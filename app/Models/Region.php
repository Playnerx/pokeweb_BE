<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier'
    ];

    public function generation(): BelongsTo {
        return $this->belongsTo(Pokemon::class);
    }
}
