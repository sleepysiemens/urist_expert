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
        Schema::create('obligatory_payments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('application_id');
            $table->string('tax_name')->nullable();
            $table->string('arrears')->nullable();
            $table->integer('kind_of_credit')->nullable();
            $table->integer('main_duty')->nullable();
            $table->integer('expired_duty')->nullable();
            $table->integer('fines')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obligatory_payments');
    }
};
