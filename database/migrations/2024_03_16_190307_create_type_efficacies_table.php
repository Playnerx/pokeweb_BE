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
        Schema::create('type_efficacies', function (Blueprint $table) {
            $table->id();
            $table->foreignId("damage_type_id")->constrained("types");
            $table->foreignId("target_type_id")->constrained("types");
            $table->integer("damage_factor");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_efficacies');
    }
};
