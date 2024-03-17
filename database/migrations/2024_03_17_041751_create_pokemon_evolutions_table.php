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
        Schema::create('pokemon_evolutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("evolution_trigger_id")->constrained("evolution_triggers");
            $table->integer("minimum_level")->nullable();
            $table->foreignId("gender_id")->nullable()->constrained("genders");
            $table->string("time_of_day")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_evolutions');
    }
};
