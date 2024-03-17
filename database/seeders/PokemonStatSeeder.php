<?php

namespace Database\Seeders;

use App\Models\PokemonStat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/pokemon_stats.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                PokemonStat::create([
                    "pokemon_id" => $data['0'],
                    "stat_id" => $data['1'],
                    "base_stat" => $data['2'],
                    "effort" => $data['3']
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
