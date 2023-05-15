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
            $table->foreignId('semester_id')->constrained();
            $table->foreignId('asignature_id')->constrained();
            $table->foreignId('objective_id')->constrained();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('evaluation_way',100);
            $table->decimal('percentage', 5, 2)->nullable();
            $table->decimal('points', 5, 2)->nullable();
            $table->timestamps();

            $table->index('semeter_id');
            $table->index('asignature_id');
            $table->index('objective_id');
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
