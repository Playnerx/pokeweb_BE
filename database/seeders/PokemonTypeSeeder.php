<?php

namespace Database\Seeders;

use App\Models\PokemonType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/pokemon_types.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                PokemonType::create([
                    "pokemon_id" => $data['0'],
                    "type_id" => $data['1'],
                    "slot" => $data['2']
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
