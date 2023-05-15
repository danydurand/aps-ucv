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

        Schema::create('objectives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignature_id')->constrained();
            $table->string('description');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index('asignature_id');
            $table->index('is_active');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objectives');
    }
};
