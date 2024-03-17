<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TypeEfficacy extends Model
{
    use HasFactory;

    protected $fillable = [
        'damage_factor'
    ];

    public function damage_type(): BelongsToMany {
        return $this->belongsToMany(Type::class);
    }

    public function target_type(): BelongsToMany {
        return $this->belongsToMany(Type::class);
    }
}
