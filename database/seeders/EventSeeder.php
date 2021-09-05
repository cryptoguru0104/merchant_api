<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Create a single user account in the database
        DB::table('events')->insertOrIgnore([
            'id' => 'de55f787-1ff7-4f5b-8db1-2631b6949076',
            'title' => 'FRIDAY DOUBLE FEATURE',
            'description' => 'Double Feature! Oceans 8 shown first at 8:00 followed by Avengers: Infinity War at 10:30',
            'start_datetime' => '2021-06-04 18:00:00',
            'end_datetime' => '2021-06-05 01:00:00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 19:16:48',
            'updated_at' => '2021-05-31 19:16:48'
        ]);

        DB::table('events')->insertOrIgnore([
            'id' => 'f36beeaf-ea9e-4ae7-b7af-38b44c63c11e',
            'title' => 'SATURDAY DOUBLE FEATURE',
            'description' => 'Double Feature! Oceans 8 shown first at 8:00 followed by Avengers: Infinity War at 10:30',
            'start_datetime' => '2021-06-04 18:00:00',
            'end_datetime' => '2021-06-05 01:00:00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 19:19:07',
            'updated_at' => '2021-05-31 19:19:07'
        ]);

        DB::table('events')->insertOrIgnore([
            'id' => 'a20a1d82-b8bc-4a0e-8aa8-31a8fa718fbe',
            'title' => 'Florida Georgia Line Concert',
            'description' => 'Encore Drive-In Nights featuring Florida Georgia Line with Special Guests Nelly and Chase Rice will air at outdoor venues across the United States, Canada and Ireland on Saturday, June 12th, 2021. The never-before-seen show was recorded live, exclusively for this one-night only event at drive-ins and outdoor venues.',
            'start_datetime' => '2021-06-12 18:00:00',
            'end_datetime' => '2021-06-12 11:59:00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 19:24:51',
            'updated_at' => '2021-05-31 19:24:51'
        ]);
    }
}
