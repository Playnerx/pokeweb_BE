<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TypeName extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function type(): BelongsToMany {
        return $this->belongsToMany(Type::class);
    }

    public function language(): BelongsToMany {
        return $this->belongsToMany(Language::class);
    }
    
}
