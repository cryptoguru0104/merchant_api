<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Create a short list of Features in the database
        DB::table('features')->insertOrIgnore([
            'id'=> 'da0732ec-fa85-4800-ac15-cb952d8208d4',
            'imdb_id'=> "tt4154756",
            'youtube_link'=> "https://www.youtube.com/watch?v=QwievZ1Tx-8",
            'poster_img'=> "uploads/avengers-infinity-war.jpg",
            'bg_img'=> "uploads/avengers-infinity-war.jpg",
            'title'=> "Avengers:Infinity War",
            'year'=> '2018',
            'rating'=> "PG-13",
            'length'=> "2h 29min",
            'genre'=> "Action",
            'short_desc'=> "The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.",
            'entry_user_id'=> '53022063-6555-485b-a319-53ebb216d527',
            'entry_date'=> '2021-05-31 00:52:27',
            'update_date'=> '2021-05-31 00:52:27'
        ]);

        // Create a short list of Features in the database
        DB::table('features')->insertOrIgnore([
            'id'=> 'de476fbd-b734-4ac8-b872-a6ef659935c3',
            'imdb_id'=> "tt5164214",
            'youtube_link'=> "https://www.youtube.com/watch?v=n5LoVcVsiSQ",
            'poster_img'=> "uploads/oceans-8.jpg",
            'bg_img'=> "uploads/oceans-8.jpg",
            'title'=> "Ocean's 8",
            'year'=> '2018',
            'rating'=> "PG-13",
            'length'=> "1h 50min",
            'genre'=> "Action",
            'short_desc'=> "Debbie Ocean gathers an all-female crew to attempt an impossible heist at New York City's yearly Met Gala.",
            'entry_user_id'=> '53022063-6555-485b-a319-53ebb216d527',
            'entry_date'=> '2021-05-31 00:58:16',
            'update_date'=> '2021-05-31 00:58:16'
        ]);

        DB::table('features')->insertOrIgnore([
            'id'=> 'de476fbd-b734-4ac8-b872-a6ef659935c3',
            'imdb_id'=> "tt5164214",
            'youtube_link'=> "https://www.youtube.com/watch?v=n5LoVcVsiSQ",
            'poster_img'=> "uploads/oceans-8.jpg",
            'bg_img'=> "uploads/oceans-8.jpg",
            'title'=> "Ocean's 8",
            'year'=> '2018',
            'rating'=> "PG-13",
            'length'=> "1h 50min",
            'genre'=> "Action",
            'short_desc'=> "Debbie Ocean gathers an all-female crew to attempt an impossible heist at New York City's yearly Met Gala.",
            'entry_user_id'=> '53022063-6555-485b-a319-53ebb216d527',
            'entry_date'=> '2021-05-31 00:58:16',
            'update_date'=> '2021-05-31 00:58:16'
        ]);

        DB::table('features')->insertOrIgnore([
            'id'=> '9867565f-f2f7-46b6-a75a-27e0b590e2ef',
            'imdb_id'=> "tt4575576",
            'youtube_link'=> "https://www.youtube.com/watch?v=0URpDxIjZrQ",
            'poster_img'=> "uploads/christopher-robin.jpg",
            'bg_img'=> "uploads/christopher-robin.jpg",
            'title'=> "Ocean's 8",
            'year'=> '2018',
            'rating'=> "PG",
            'length'=> "1h 44min",
            'genre'=> "Adventure",
            'short_desc'=> "A working-class family man, Christopher Robin, encounters his childhood friend Winnie-the-Pooh, who helps him to rediscover the joys of life.",
            'entry_user_id'=> '53022063-6555-485b-a319-53ebb216d527',
            'entry_date'=> '2021-05-31 01:04:51',
            'update_date'=> '2021-05-31 00:04:51'
        ]);
    }
}
