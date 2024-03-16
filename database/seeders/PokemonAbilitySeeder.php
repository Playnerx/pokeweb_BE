<?php

namespace Database\Seeders;

use App\Models\PokemonAbility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonAbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/pokemon_abilities.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                PokemonAbility::create([
                    "pokemon_id" => $data['0'],
                    "ability_id" => $data['1'],
                    "is_hidden" => $data['2']
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
