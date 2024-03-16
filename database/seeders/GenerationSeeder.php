<?php

namespace Database\Seeders;

use App\Models\Generation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/generations.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Generation::create([
                    "id" => $data['0'],
                    "main_region_id" => $data['1'],
                    "identifier" => $data['2']
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
