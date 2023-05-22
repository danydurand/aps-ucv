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

        Schema::create('asignatures', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10);
            $table->string('name', 150);
            $table->integer('credits');
            $table->foreignId('semester_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->char('type', 1);
            $table->text('presentation')->nullable();
            $table->text('general_objective')->nullable();
            $table->text('themes')->nullable();
            $table->text('purpose')->nullable();
            $table->string('info_count', 10)->nullable();
            $table->smallInteger('objectives_count')->default(0);
            $table->timestamps();

            $table->index('semester_id');
            $table->index('department_id');
            $table->unique(['code', 'semester_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignatures');
    }
};
