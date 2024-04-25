<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Feltöltés adatokkal
        DB::table('topics')->insert([
            'name' => 'Felnik',
            'type_id' => 1,
            'description' => 'felnik topic leírása.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('topics')->insert([
            'name' => 'Kandúr macskák',
            'type_id' => 2,
            'description' => 'Kandúr macskák topic leírása',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('topics')->insert([
            'name' => 'LCD monitorok',
            'type_id' => 3,
            'description' => 'LCD monitorok leírása',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // További feltöltések...
    }
}

