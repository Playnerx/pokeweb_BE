<?php

namespace Database\Seeders;

use App\Models\EvolutionTriggerProse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvolutionTriggerProseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/evolution_trigger_prose.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                EvolutionTriggerProse::create([
                    "evolution_trigger_id" => $data['0'],
                    "local_language_id" => $data['1'],
                    "name" => $data['2']
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
