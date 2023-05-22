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
        Schema::disableForeignKeyConstraints();

        Schema::create('asignature_professor', function (Blueprint $table) {
            $table->foreignId('asignature_id')->constrained();
            $table->foreignId('professor_id')->constrained();

            $table->index('asignature_id');
            $table->index('professor_id');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignature_professor');
    }
};
