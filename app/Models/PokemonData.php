<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonData extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'specie_id', 'nome', 'generazione', 'descrizione', 'tipo1', 'tipo2', 'abilita_base', 'abilita_nascosta', 'altezza', 'peso', 'categoria', 'hpstat', 'atkstat', 'defstat', 'spatkstat', 'spdefstat', 'spdstat'
    ];
}
