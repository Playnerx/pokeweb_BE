<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Description extends Model
{
    use HasFactory;

    protected $fillable = [
        'flavor_text'
    ];

    public function species(): BelongsTo {
        return $this->belongsTo(Species::class);
    }

    public function version(): BelongsTo {
        return $this->belongsTo(Version::class);
    }

    public function language(): BelongsTo {
        return $this->belongsTo(Language::class);
    }

}
