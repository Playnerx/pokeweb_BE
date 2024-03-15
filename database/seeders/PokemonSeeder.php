<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/pokemon.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Pokemon::insert([
                    "id" => $data['0'],
                    "identifier" => $data['1'],
                    "species_id" => $data['2'],
                    "height" => $data['3'],
                    "weight" => $data['4']

                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}