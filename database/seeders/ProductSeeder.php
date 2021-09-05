<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a handful of products  in the database
        DB::table('products')->insertOrIgnore([
            'id' => '53022063-6555-485b-a319-53ebb216d527',
            'type' => 'food',
            'name' => 'Hamburger',
            'description' => 'Delicious, juicy, and seared to perfection.',
            'thumb_url' => 'uploads/hamburger-thumb.png',
            'image_url' => 'uploads/hamburger.png',
            'amount' => '5.00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 01:34:23',
            'updated_at' => '2021-05-31 01:34:23'
        ]);

        DB::table('products')->insertOrIgnore([
            'id' => '9ce166dd-e2a6-471c-a030-da77a3b11258',
            'type' => 'food',
            'name' => 'French Fries',
            'description' => 'Crisp, golden fries--get them while they\'re hot!',
            'thumb_url' => 'uploads/frenchfries-thumb.png',
            'image_url' => 'uploads/frenchfries.png',
            'amount' => '4.00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 01:36:19',
            'updated_at' => '2021-05-31 01:36:19'
        ]);

        DB::table('products')->insertOrIgnore([
            'id' => 'ab6cda54-f000-4648-97f1-d3b5dd322043',
            'type' => 'food',
            'name' => 'Large Popcorn',
            'description' => 'Light, Fluffy, Buttery and ready for you here at our snackbar!',
            'thumb_url' => 'uploads/lg-popcorn-thumb.png',
            'image_url' => 'uploads/lg-popcorn.png',
            'amount' => '7.00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 01:37:56',
            'updated_at' => '2021-05-31 01:37:56'
        ]);


        DB::table('products')->insertOrIgnore([
            'id' => '3f0d589a-6b6f-420c-814f-b5017b97336c',
            'type' => 'clothing',
            'name' => 'Small T-Shirt',
            'description' => 'Our 100% Cotton T-Shirts are both comfortable and stylish!',
            'thumb_url' => 'uploads/sm-tshirt-thumb.png',
            'image_url' => 'uploads/sm-tshirt.png',
            'amount' => '15.00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 01:40:41',
            'updated_at' => '2021-05-31 01:40:41'
        ]);

        DB::table('products')->insertOrIgnore([
            'id' => '78fcccd9-6dd5-4a66-ac09-84b78e803de5',
            'type' => 'clothing',
            'name' => 'Medium T-Shirt',
            'description' => 'Our 100% Cotton T-Shirts are both comfortable and stylish!',
            'thumb_url' => 'uploads/md-tshirt-thumb.png',
            'image_url' => 'uploads/md-tshirt.png',
            'amount' => '15.00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 01:43:01',
            'updated_at' => '2021-05-31 01:43:01'
        ]);


        DB::table('products')->insertOrIgnore([
            'id' => '3a5bd4e0-67e2-4215-b012-828d2cab104c',
            'type' => 'admission',
            'name' => 'Double Feature - Adult',
            'description' => 'General Admission - Adult (ages 15 and older)',
            'thumb_url' => 'uploads/ticket-thumb.png',
            'image_url' => 'uploads/ticket.png',
            'amount' => '13.00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 01:47:59',
            'updated_at' => '2021-05-31 01:47:59'
        ]);

        DB::table('products')->insertOrIgnore([
            'id' => 'ca2f9bf9-7ee6-4099-8556-8b4ba73fde9d',
            'type' => 'admission',
            'name' => 'Double Feature - Child',
            'description' => 'General Admission - Child (ages 7-14)',
            'thumb_url' => 'uploads/ticket-thumb.png',
            'image_url' => 'uploads/ticket.png',
            'amount' => '7.00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 01:47:59',
            'updated_at' => '2021-05-31 01:47:59'
        ]);

        DB::table('products')->insertOrIgnore([
            'id' => 'bf7d8f23-85f7-4af0-b453-e80b3cbd5eef',
            'type' => 'admission',
            'name' => 'Double Feature - Young Child',
            'description' => 'General Admission - Young Child (ages 0-6)',
            'thumb_url' => 'uploads/ticket-thumb.png',
            'image_url' => 'uploads/ticket.png',
            'amount' => '0.00',
            'entry_user_id' => '53022063-6555-485b-a319-53ebb216d527',
            'created_at' => '2021-05-31 01:52:08',
            'updated_at' => '2021-05-31 01:42:08'
        ]);


    }
}
