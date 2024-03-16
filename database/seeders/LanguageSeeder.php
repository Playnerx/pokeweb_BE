<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/languages.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Language::insert([
                    "id" => $data['0'],
                    "iso639" => $data['1'],
                    "iso3166" => $data['2'],
                    "identifier" => $data['3'],
                    "official" => $data['4'],
                    "order" => $data['5']

                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
