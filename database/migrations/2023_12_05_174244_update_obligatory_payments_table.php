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
        Schema::table('obligatory_payments', function (Blueprint $table) {
            $table->string('tax_requirements')->nullable();
            $table->string('certificate_of_absence')->nullable();
            $table->string('state_duty')->nullable();
            $table->string('court_deposit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
