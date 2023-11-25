<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')
                ->nullable(false);
            $table->string('email')
                ->nullable(false)
                ->unique();
            $table->string('password')
                ->nullable(false);
            $table->timestamp('last_login_at')
                ->nullable();
            $table->string('last_login_ip')
                ->nullable();
            $table->boolean('is_active')
                ->default(false);
            $table->rememberToken();
            $table->string('email_confirmation_code')
                ->unique()
                ->nullable();
            $table->text('multi_factor_secret')
                ->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
