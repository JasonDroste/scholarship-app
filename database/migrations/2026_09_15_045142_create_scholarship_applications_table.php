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
        Schema::create('scholarship_applications', function (Blueprint $table) {
            $table->id();

             $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('status')->default('draft');

            // Step 1 - General Information
            $table->string('first_name')->nullable();
            //$table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->date('date_of_birth')->nullable();

            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();

            $table->string('phone')->nullable();

            // Step 2 - Education
            $table->string('high_school')->nullable();
            $table->date('graduation_date')->nullable();
            $table->decimal('gpa', 4, 2)->nullable();

            $table->boolean('first_generation_college')
                ->nullable();

            $table->string('intended_college')->nullable();
            $table->string('intended_major')->nullable();

            // Step 3 - Family
            $table->string('parent_guardian_name')->nullable();
            $table->string('parent_guardian_phone')->nullable();
            $table->string('parent_guardian_email')->nullable();

            // Step 4 - Activities
            $table->text('activities')->nullable();
            $table->text('community_service')->nullable();
            $table->text('awards')->nullable();

            // Step 6
            $table->text('student_statement')->nullable();
            $table->boolean('certification')->default(false);

            $table->timestamp('submitted_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_applications');
    }
};
