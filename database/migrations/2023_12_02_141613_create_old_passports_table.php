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
        Schema::create('old_passports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('application_id');
            $table->string('surname')->nullable();
            $table->string('name')->nullable();
            $table->string('serial')->nullable();
            $table->string('number')->nullable();
            $table->string('kem')->nullable();
            $table->date('date_of_issue')->nullable();
            $table->string('department_code')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('inn')->nullable();
            $table->string('snils')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('old_passports');
    }
};
