<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a single user account in the database
        DB::table('users')->insertOrIgnore([
            'id' => '53022063-6555-485b-a319-53ebb216d527',
            'first_name' => 'John',
            'last_name' => 'Parker',
            'email' => 'jmichael@littlefixit.com',
            'password' => '$2y$10$CylY30rkuGVBL7RJXdgy6e/kfsx7tFDez1HBCkpGkOC5fsTFVHt26'
        ]);

        DB::table('users')->insertOrIgnore([
            'id' => 'bb18f7ee-8b5c-46d0-9f57-4805b8c5309c',
            'first_name' => 'Caleb',
            'last_name' => 'Martin',
            'email' => 'cmartin@littlefixit.com',
            'password' => '$2y$10$CylY30rkuGVBL7RJXdgy6e/kfsx7tFDez1HBCkpGkOC5fsTFVHt26'
        ]);
    }
}
