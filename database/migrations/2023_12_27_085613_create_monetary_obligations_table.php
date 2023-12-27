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
        Schema::create('monetary_obligations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('content')->nullable();
            $table->string('creditor')->nullable();
            $table->string('basis')->nullable();
            $table->decimal('total')->nullable();
            $table->decimal('debt')->nullable();
            $table->decimal('fine')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monetary_obligations');
    }
};
