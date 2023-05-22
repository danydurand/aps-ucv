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

        Schema::create('plannings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('period_id')->constrained();
            $table->foreignId('asignature_id')->constrained();
            $table->foreignId('professor_id')->constrained();
            $table->foreignId('objective_id')->constrained();
            $table->date('estimated_date');
            $table->timestamps();

            $table->index('period_id');
            $table->index('asignature_id');
            $table->index('professor_id');
            $table->index('objective_id');
            $table->unique(['period_id', 'asignature_id', 'professor_id', 'objective_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plannings');
    }
};
