<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Feltöltés adatokkal
        DB::table('topic_types')->insert([
            'name' => 'Autók',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('topic_types')->insert([
            'name' => 'Macskák',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('topic_types')->insert([
            'name' => 'Monitorok',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // További feltöltések...
    }
}


