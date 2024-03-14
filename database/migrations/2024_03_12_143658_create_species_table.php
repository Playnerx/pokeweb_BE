<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('species', function (Blueprint $table) {
            $table->id();
            $table->string("identifier");
            $table->integer("generation_id");
            $table->integer("evolution_chain_id");
            $table->unsignedBigInteger("evolves_from_species_id")->nullable();
            /* $table->timestamps(); */
            // Togli timestamps se vai a usare insert anziché create nel Seeder.
        });

        /* Schema::table('species', function (Blueprint $table) {
            $table->unsignedBigInteger("evolves_from_species_id")->nullable();
        }); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('species');
    }
};
