<?php

namespace Database\Seeders;

use App\Models\Specie;
use App\Models\Species;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/pokemon_species.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Species::insert([
                    "identifier" => $data['1'],
                    "generation_id" => $data['2'],
                    "evolution_chain_id" => $data['4'],
                    "evolves_from_species_id" => $data['3'] ?: null

                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
