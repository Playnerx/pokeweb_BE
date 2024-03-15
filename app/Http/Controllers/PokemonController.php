<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return response()->json($pokemons, 200);
    }

    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return response()->json($pokemon, 200);
    }

    public function getAllPokemonData()
    {
        $pokemonData = Pokemon::with('species', 'abilities')->get();
        return response()->json($pokemonData, 200);
    }

    // Altri metodi del controller possono essere definiti qui, come ad esempio per la creazione, l'aggiornamento e l'eliminazione di Pokemon
}