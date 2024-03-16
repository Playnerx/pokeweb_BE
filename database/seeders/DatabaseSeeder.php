<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Region;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $this->call([RegionSeeder::class, GenerationSeeder::class, SpecieSeeder::class, PokemonSeeder::class, AbilitySeeder::class, LanguageSeeder::class, VersionSeeder::class, DescriptionSeeder::class, PokemonAbilitySeeder::class, TypeSeeder::class]);
    }
}
