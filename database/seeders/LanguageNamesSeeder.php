<?php

namespace Database\Seeders;

use App\Models\LanguageNames;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/language_names.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                LanguageNames::create([
                    "language_id" => $data['0'],
                    "local_language_id" => $data['1'],
                    "name" => $data['2'],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
