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
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->date('dob');
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('graduate_status');
            $table->string('high_school')->nullable();
            $table->string('post_secondary');
            $table->string('study_focus');
            $table->boolean('first_gen');
            $table->boolean('member_status');
            $table->boolean('previous_scholarship');
            $table->decimal('gpa', 4, 2);
            $table->text('essay');
            $table->text('short_answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application');
    }
};
