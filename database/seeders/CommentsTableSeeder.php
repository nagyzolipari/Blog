<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Feltöltés adatokkal
        DB::table('comments')->insert([
            'user_id' => 1,
            'topic_id' => 1,
            'body' => 'Ez egy példa komment11.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('comments')->insert([
            'user_id' => 2,
            'topic_id' => 1,
            'body' => 'Ez egy példa komment21.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('comments')->insert([
            'user_id' => 2,
            'topic_id' => 2,
            'body' => 'Ez egy példa komment22.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // További feltöltések...
    }
}
