<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LanguageNames extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function language(): BelongsTo {
        return $this->belongsTo(Language::class);
    }

    public function local_language(): BelongsTo {
        return $this->belongsTo(Language::class);
    }
}
