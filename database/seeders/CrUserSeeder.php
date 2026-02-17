<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Use Hash::make for standard Laravel or password_hash for PHP native if Auth.php expects that.
// Auth.php used password_verify(), which works with Hash::make() (bcrypt).

class CrUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cr_users')->insert([
            [
                'name' => 'Student User',
                'email' => 'student@example.com',
                'password' => Hash::make('password'),
                'role' => 'student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CR Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'cr',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
