<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/stats.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Stat::insert([
                    "id" => $data['0'],
                    "damage_class_id" => $data['1'] ?: null,
                    "identifier" => $data['2'],
                    "is_battle_only" => $data['3'],
                    "game_index" => $data['4'] ?: null,

                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
