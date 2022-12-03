<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // run the seeders
        $this->call([
            PlaceSeeder::class,
            FeatureSeeder::class,
            TypeSeeder::class,
        ]);
    }
}
