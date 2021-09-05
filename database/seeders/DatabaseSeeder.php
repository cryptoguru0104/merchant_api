<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Load local seeder (never for Production)
        if (App::Environment() === 'local') {
            $this->call([
                UserSeeder::class,
                FeatureSeeder::class,
                ProductSeeder::class,
                OrderSeeder::class
            ]);
        }
    }
}
