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
        Schema::create('type_names', function (Blueprint $table) {
            $table->id();
            $table->foreignId("type_id")->constrained("types");
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
        Schema::dropIfExists('type_names');
    }
};
