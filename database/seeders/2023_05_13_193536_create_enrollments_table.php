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

        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semester_id')->constrained();
            $table->string('id_document', 20);
            $table->string('student_name', 100);
            $table->string('score_average', 10);
            $table->timestamps();

            $table->index('semeter_id');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
