<?php

namespace Database\Seeders;

use App\Models\TypeEfficacy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeEfficacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/type_efficacy.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                TypeEfficacy::create([
                    "damage_type_id" => $data['0'],
                    "target_type_id" => $data['1'],
                    "damage_factor" => $data['2'],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
