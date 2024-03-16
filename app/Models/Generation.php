<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Generation extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier'
    ];

    public function main_region(): BelongsTo {
        return $this->belongsTo(Region::class);
    }

    public function type(): BelongsTo {
        return $this->belongsTo(Type::class);
    }


}
