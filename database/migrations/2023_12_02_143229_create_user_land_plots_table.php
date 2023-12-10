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
        Schema::create('user_land_plots', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('number');
            $table->integer('application_id');
            $table->string('certificate')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('type')->nullable();
            $table->string('square')->nullable();
            $table->decimal('cost')->nullable();
            $table->string('deposit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_land_plots');
    }
};
