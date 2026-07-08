<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tables = [
            'migrations',
            'users',
            'password_reset_tokens',
            'sessions',
            'cache',
            'cache_locks',
            'jobs',
            'job_batches',
            'failed_jobs',
        ];

        foreach ($tables as $table) {
            DB::statement("ALTER TABLE \"{$table}\" ENABLE ROW LEVEL SECURITY;");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = [
            'migrations',
            'users',
            'password_reset_tokens',
            'sessions',
            'cache',
            'cache_locks',
            'jobs',
            'job_batches',
            'failed_jobs',
        ];

        foreach ($tables as $table) {
            DB::statement("ALTER TABLE \"{$table}\" DISABLE ROW LEVEL SECURITY;");
        }
    }
};
