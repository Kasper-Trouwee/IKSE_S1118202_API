<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> "test admin",
            'email'=> "admin@gmail.com",
            'password'=> bcrypt("laravel"),
            'role' => "Admin",
        ]);

        DB::table('users')->insert([
            'name'=> "test user",
            'email'=> "user@gmail.com",
            'password'=> bcrypt("laravel"),
            'role' => "User",
        ]);
    }
}
