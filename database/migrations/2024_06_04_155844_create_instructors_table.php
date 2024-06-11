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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('maiden_name')->nullable();
            $table->string('instructor_code');
            $table->string('pedigree')->nullable();
            $table->string('birth_date');
            $table->foreignId('birthplace_id')->constrained('cities')->cascadeOnDelete();
            $table->foreignId('city_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('biological_sex_id')->constrained()->cascadeOnDelete();
            $table->foreignId('civil_status_id')->constrained()->cascadeOnDelete();
            $table->foreignId('college_id')->constrained()->cascadeOnDelete();
            $table->foreignId('citizenship_id')->constrained()->cascadeOnDelete();
            $table->string('mobile_phone');
            $table->string('email_address');
            $table->string('tin_number', length: 15)->unique()->nullable();
            $table->string('gsis_number')->unique()->nullable();
            $table->string('street_address')->nullable();
            $table->string('zip_code', length: 4)->nullable();
            $table->string('phone_number')->nullable();
            $table->string('faculty_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
