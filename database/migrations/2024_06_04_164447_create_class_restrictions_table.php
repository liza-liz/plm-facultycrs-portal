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
        Schema::create('class_restrictions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')
                    ->nullable()
                    ->constrained()
                    ->cascadeOnDelete();
            $table->enum('scope', ['Block', 'College', 'Program', 'Program & Year-level', 'User', 'Gender'])
                    ->nullable();
            $table->string('restriction')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_restrictions');
    }
};
