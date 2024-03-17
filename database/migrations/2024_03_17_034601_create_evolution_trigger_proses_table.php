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
        Schema::create('evolution_trigger_proses', function (Blueprint $table) {
            $table->foreignId("evolution_trigger_id")->constrained("evolution_triggers");
            $table->foreignId("local_language_id")->constrained("languages");
            $table->string("name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evolution_trigger_proses');
    }
};
