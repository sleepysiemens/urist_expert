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
        Schema::create('user_marriages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('application_id');
            $table->string('marriage_certificate')->nullable();
            $table->string('spouse_passport')->nullable();
            $table->string('spouse_snils')->nullable();
            $table->string('spouse_inn')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_marrages');
    }
};
