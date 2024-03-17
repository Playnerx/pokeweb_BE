<?php

namespace Database\Seeders;

use App\Models\PokemonEvolution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonEvolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/pokemon_evolution.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                PokemonEvolution::create([
                    "id" => $data['0'],
                    "evolution_trigger_id" => $data['2'],
                    "minimum_level" => $data['4'] ?: null,
                    "gender_id" => $data['5'] ?: null,
                    "time_of_day" => $data['8'] ?: null,
                
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
