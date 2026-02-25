<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Run this migration on the user_db connection
    protected $connection = 'user_db';

    public function up(): void
    {
        if (!Schema::connection('user_db')->hasTable('password_reset_tokens')) {
            Schema::connection('user_db')->create('password_reset_tokens', function (Blueprint $table) {
                $table->string('email')->primary();
                $table->string('token');
                $table->timestamp('created_at')->nullable();
            });
        }
    }

    public function down(): void
    {
        Schema::connection('user_db')->dropIfExists('password_reset_tokens');
    }
};
