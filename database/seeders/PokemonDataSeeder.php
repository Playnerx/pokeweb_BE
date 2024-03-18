<?php

namespace Database\Seeders;

use App\Models\PokemonData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/database.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                PokemonData::create([
                    "id" => $data['0'],
                    "specie_id" => $data['1'],
                    "nome" => $data['2'],
                    "generazione" => $data['3'],
                    "descrizione" => $data['4'],
                    "tipo1" => $data['5'],
                    "tipo2" => $data['6'],
                    "abilita_base" => $data['7'],
                    "abilita_nascosta" => $data['8'],
                    "altezza" => $data['9'],
                    "peso" => $data['10'],
                    "categoria" => $data['11'],
                    "hpstat" => $data['12'],
                    "atkstat" => $data['13'],
                    "defstat" => $data['14'],
                    "spatkstat" => $data['15'],
                    "spdefstat" => $data['16'],
                    "spdstat" => $data['17'],
                    
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
