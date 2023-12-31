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
        Schema::create('credotors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('number');
            $table->integer('application_id');
            $table->string('name')->nullable();
            $table->string('region')->nullable();
            $table->integer('kind_of_credit')->nullable();
            $table->string('statement')->nullable();
            $table->string('file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credotors');
    }
};
