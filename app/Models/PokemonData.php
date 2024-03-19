<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonData extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'specie_id', 'nome', 'generazione', 'descrizione', 'tipo1', 'tipo2', 'abilita_base', 'abilita_nascosta', 'altezza', 'peso', 'categoria', 'hpstat', 'atkstat', 'defstat', 'spatkstat', 'spdefstat', 'spdstat', 'gruppo_uova1', 'gruppo_uova2', 'debolezza1', 'debolezza2', 'debolezza3', 'debolezza4', 'debolezza5', 'debolezza6', 'immagine'
    ];
}
