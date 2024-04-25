<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Felhasználók tábla feltöltése
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => '1656684684565',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
//
//        // Jelszó visszaállító tokenek tábla feltöltése
//        DB::table('password_reset_tokens')->insert([
//            'email' => 'john@example.com',
//            'remember_token' => '1656684684599',
//            'created_at' => now(),
//        ]);
//
//        // Munkamenetek tábla feltöltése
//        DB::table('sessions')->insert([
//            'id' => '516',
//            'user_id' => null,
//            'ip_address' => '127.0.0.1',
//            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
//            'payload' => '[]',
//            'last_activity' => time(),
//        ]);


        // Felhasználók tábla feltöltése
        DB::table('users')->insert([
            'name' => 'John Doe2',
            'email' => 'john2@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => '498645546553',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
//
//        // Jelszó visszaállító tokenek tábla feltöltése
//        DB::table('password_reset_tokens')->insert([
//            'email' => 'john2@example.com',
//            'remember_token' => '498645546555',
//            'created_at' => now(),
//        ]);
//
//        // Munkamenetek tábla feltöltése
//        DB::table('sessions')->insert([
//            'id' => '846',
//            'user_id' => null,
//            'ip_address' => '127.0.0.1',
//            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
//            'payload' => '[]',
//            'last_activity' => time(),
//        ]);
    }
}
