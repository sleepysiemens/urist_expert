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
        Schema::create('user_motorized_transports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('number');
            $table->integer('application_id');
            $table->string('pts')->nullable();
            $table->string('subject')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('locality')->nullable();
            $table->string('house')->nullable();
            $table->string('flat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_motorized_transports');
    }
};
