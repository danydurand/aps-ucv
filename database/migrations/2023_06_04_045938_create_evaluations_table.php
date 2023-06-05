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

        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professor_asignature_id')->constrained();
            $table->string('objectives', 20);
            $table->string('evaluation_way', 100);
            $table->decimal('percentage', 5, 2)->nullable();
            $table->decimal('points', 5, 2)->nullable();
            $table->timestamps();

            $table->index('professor_asignature_id');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
