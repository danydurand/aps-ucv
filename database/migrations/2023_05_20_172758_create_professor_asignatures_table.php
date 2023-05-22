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

        Schema::create('professor_asignatures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professor_id')->constrained();
            $table->foreignId('asignature_id')->constrained();
            $table->char('section',5);
            $table->timestamps();

            $table->index('professor_id');
            $table->index('asignature_id');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professor_asignatures');
    }
};
