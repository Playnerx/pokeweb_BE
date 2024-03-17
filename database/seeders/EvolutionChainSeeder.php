<?php

namespace Database\Seeders;

use App\Models\EvolutionChain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvolutionChainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/evolution_chains.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                EvolutionChain::create([
                    "id" => $data['0'],
                    "baby_trigger_item_id" => $data['1'] ?: null
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
