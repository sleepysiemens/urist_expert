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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('application_id');
            $table->string('bank_name')->nullable();
            $table->integer('kind_of_account')->nullable();
            $table->date('creation_date')->nullable();
            $table->decimal('bank_account_rest')->nullable();
            $table->string('account_statement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
