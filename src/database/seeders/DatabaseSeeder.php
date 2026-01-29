<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            RumahSakitSeeder::class,
            PoliklinikSeeder::class,
            DokterSeeder::class,
            PasienSeeder::class,
            ObatSeeder::class,
            JadwalPraktekSeeder::class,
            KunjunganSeeder::class,
            ResepSeeder::class,
        ]);
    }
}