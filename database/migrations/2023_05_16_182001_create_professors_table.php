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

        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->foreignId('period_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->string('email', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('id_document', 30)->nullable();
            $table->string('phones', 50)->nullable();
            $table->string('comments', 250)->nullable();
            $table->timestamps();

            $table->index('period_id');
            $table->index('department_id');
            $table->index('is_active');
            $table->unique(['name', 'period_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
