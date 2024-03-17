<?php

namespace Database\Seeders;

use App\Models\EvolutionTrigger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvolutionTriggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/evolution_triggers.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                EvolutionTrigger::create([
                    "id" => $data['0'],
                    "identifier" => $data['1'],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
