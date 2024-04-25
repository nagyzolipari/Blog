<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavouriteTopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FavouriteTopics tábla feltöltése
        DB::table('favourite_topics')->insert([
            'user_id' => 1,
            'topic_id' => 1,
        ]);

        // További feltöltések...
    }
}
