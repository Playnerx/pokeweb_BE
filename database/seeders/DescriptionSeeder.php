<?php

namespace Database\Seeders;

use App\Models\Description;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/pokemon_species_flavor_text.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Description::create([
                    "species_id" => $data['0'],
                    "version_id" => $data['1'],
                    "language_id" => $data['2'],
                    "flavor_text" => $data['3'],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
