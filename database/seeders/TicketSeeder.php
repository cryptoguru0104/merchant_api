<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a handful of tickets in the database
        DB::table('tickets')->insertOrIgnore([
            'id' => '5a363fdb-fca2-4b65-bdaf-e72544b7b654',
            'user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'event_id' => 'de55f787-1ff7-4f5b-8db1-2631b6949076',
            'type' => 'ticket',
            'details' => '2x Adults, 1x Children, 2x Young Children',
            'status' => 'OPEN',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 20:51:23',
            'updated_at' => '2021-05-31 20:51:23'
        ]);

        DB::table('tickets')->insertOrIgnore([
            'id' => '77372ef2-e70d-42d6-80d7-872f7ce0b936',
            'user_id' => 'bb18f7ee-8b5c-46d0-9f57-4805b8c5309c',
            'event_id' => 'de55f787-1ff7-4f5b-8db1-2631b6949076',
            'type' => 'ticket',
            'details' => '2x Adults, 0x Children, 0x Young Children',
            'status' => 'OPEN',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 20:51:23',
            'updated_at' => '2021-05-31 20:51:23'
        ]);

    }
}
