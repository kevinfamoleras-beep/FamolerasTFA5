<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosDemoSeeder extends Seeder
{
    public function run(): void
    {
        // Optional demonstration seed data; the TFA5 pages still use static arrays.
        DB::table('customers')->insert([
            ['full_name' => 'Hatsune Miku', 'email' => 'miku@example.com', 'phone' => '09170000001', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Kasane Teto', 'email' => 'teto@example.com', 'phone' => '09170000002', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Akita Neru', 'email' => 'neru@example.com', 'phone' => '09170000003', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Zundamon', 'email' => 'zunda@example.com', 'phone' => '09170000004', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Yowane Haku', 'email' => 'haku@example.com', 'phone' => '09170000005', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
