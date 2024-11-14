<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            \Database\Seeders\BookSeeder::class,
            \Database\Seeders\CategoryExternalBD1Seeder::class,
            \Database\Seeders\CategoryExternalBD2Seeder::class,
        ]);
    }
}
