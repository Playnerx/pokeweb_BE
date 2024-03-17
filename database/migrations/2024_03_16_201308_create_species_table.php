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
            $table->foreignId("generation_id")->constrained("generations");
            $table->foreignId("evolution_chain_id")->constrained("evolution_chains");
            $table->integer("gender_rate");
            $table->unsignedBigInteger("evolves_from_species_id")->nullable();
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('species');
    }
};
