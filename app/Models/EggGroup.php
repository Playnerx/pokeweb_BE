<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EggGroup extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'identifier'
    ];

    public function egg_group_prose(): BelongsTo {
        return $this->belongsTo(EggGroupProse::class);
    }
}
