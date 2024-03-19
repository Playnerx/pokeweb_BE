<?php

namespace App\Http\Controllers;

use App\Models\PokemonData;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PokemonDataController extends Controller
{
    public function index()
    {
        $pokemons = PokemonData::all();
        return response()->json($pokemons, 200);
    }

    public function show($id)
    {
        $pokemon = PokemonData::findOrFail($id);
        return response()->json($pokemon, 200);
    }

    public function infoPokemon()
    {
        $pokemonData = PokemonData::with('specie_id', 'nome', 'generazione', 'descrizione', 'tipo1', 'tipo2', 'abilita_base', 'abilita_nascosta', 'altezza', 'peso', 'categoria', 'hpstat', 'atkstat', 'defstat', 'spatkstat', 'spdefstat', 'spdstat', 'gruppo_uova1', 'gruppo_uova2', 'debolezza1', 'debolezza2', 'debolezza3', 'debolezza4', 'debolezza5', 'debolezza6', 'immagine')->get();
        return response()->json($pokemonData, 200);
    }

}