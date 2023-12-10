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
        Schema::create('user_agricultural_techniques', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('application_id');
            $table->string('number')->nullable();
            $table->string('id_number')->nullable();
            $table->string('type')->nullable();
            $table->string('address')->nullable();
            $table->string('cost')->nullable();
            $table->string('deposit')->nullable();
            $table->string('pts')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_agricultural_techniques');
    }
};
