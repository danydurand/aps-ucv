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
            $table->foreignId('period_id')->constrained();
            $table->decimal('order', 4, 2);
            $table->string('description',100);
            $table->boolean('is_active')->default(true);
            $table->text('content')->nullable();
            $table->text('books')->nullable();
            $table->timestamps();

            $table->index('asignature_id');
            $table->index('period_id');
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
