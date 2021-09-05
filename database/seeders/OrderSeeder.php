<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Create a single user account in the database
        DB::table('orders')->insertOrIgnore([
            'id' => '58b087bc-11bc-4b09-b963-eec2bd6fd2b3',
            'user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'status' => 'PAID',
            'mxmerchant_invoice_id' => '84731918',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 19:47:23',
            'updated_at' => '2021-05-31 19:47:23'
        ]);

        // Create a single user account in the database
        DB::table('orders')->insertOrIgnore([
            'id' => '97d926f6-3101-405a-a0c9-ab190d885858',
            'user_id' => 'bb18f7ee-8b5c-46d0-9f57-4805b8c5309c',
            'status' => 'PAID',
            'mxmerchant_invoice_id' => '84731979',
            'entry_user_id' => 'bb18f7ee-8b5c-46d0-9f57-4805b8c5309c',
            'created_at' => '2021-05-31 19:48:16',
            'updated_at' => '2021-05-31 19:48:16'
        ]);
    }
}
