<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('role')->default('user');
        });

        User::create(['name'=>'admin','email'=>'admin@admin.com', 'password'=>'$2y$12$YL6J7NrcBoelbrKWb8TUA.BqzHpUWE2ZCyD.nTlUyIFtVE.zCycFi', 'phone'=>'admin', 'role'=>'admin']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
