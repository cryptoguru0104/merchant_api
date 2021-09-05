<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a handful of order_detail records in the database
        DB::table('order_details')->insertOrIgnore([
            'id' => '49383f67-e2a5-463e-9522-45d8e68932bf',
            'order_id' => '58b087bc-11bc-4b09-b963-eec2bd6fd2b3',
            'type' => 'ticket',
            'ticket_id' => '5a363fdb-fca2-4b65-bdaf-e72544b7b654',
            // 'product_id' => '',
            'amount' => '36.00',
            'qty' => 1,
            'line_total' => '36.00',
            'status' => 'CHARGED',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 21:28:19',
            'updated_at' => '2021-05-31 21:28:19'
        ]);

        // Create a handful of order_detail records in the database
        DB::table('order_details')->insertOrIgnore([
            'id' => '18cf8c73-244e-42a9-811c-ea530a97f80b',
            'order_id' => '97d926f6-3101-405a-a0c9-ab190d885858',
            'type' => 'ticket',
            'ticket_id' => '77372ef2-e70d-42d6-80d7-872f7ce0b936',
            // 'product_id' => '',
            'amount' => '26.00',
            'qty' => 1,
            'line_total' => '26.00',
            'status' => 'CHARGED',
            'entry_user_id' => 'bb18f7ee-8b5c-46d0-9f57-4805b8c5309c',
            'created_at' => '2021-05-31 21:39:41',
            'updated_at' => '2021-05-31 21:39:41'
        ]);
    }
}
