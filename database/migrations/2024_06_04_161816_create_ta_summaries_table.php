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
        Schema::create('ta_summaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')
                    ->nullable()
                    ->constrained()
                    ->cascadeOnDelete();
            $table->integer('regular');
            $table->integer('extra');
            $table->integer('administrative');
            $table->integer('substitution');
            $table->integer('off_campus');
            $table->integer('study');
            $table->integer('outside');
            $table->integer('pro_bono');
            $table->foreignId('aysem_id')
                    ->nullable()
                    ->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ta_summaries');
    }
};
