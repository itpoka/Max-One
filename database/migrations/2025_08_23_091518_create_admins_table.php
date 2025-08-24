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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('username', 60)->unique();
            $table->string('email', 191)->unique();
            $table->string('phone', 30)->nullable()->index();
            $table->string('password');
            $table->boolean('is_active')->default(true)->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login_at')->nullable()->index();
            $table->string('last_login_ip', 45)->nullable();

            // 2FA (optional)
            $table->string('two_factor_secret')->nullable();
            $table->string('two_factor_recovery_codes')->nullable();

            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->index(['username', 'email']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
