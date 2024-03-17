<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EvolutionChain extends Model
{
    use HasFactory;

    protected $fillable = [
        'baby_trigger_item_id'
    ];

    public function species(): BelongsToMany {
        return $this->belongsToMany(Species::class);
    }

}
