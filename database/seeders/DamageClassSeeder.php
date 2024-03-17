<?php

namespace Database\Seeders;

use App\Models\DamageClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DamageClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/move_damage_classes.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                DamageClass::create([
                    "id" => $data['0'],
                    "identifier" => $data['1']
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
