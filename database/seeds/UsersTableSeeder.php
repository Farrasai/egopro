<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'),
            'address' => null,
            'nohp' => null,
            'avatar' => 'media/profileUser/avatar-user.jpg',
        ]);

        DB::table('users')->insert([
            'name' => 'User2',
            'email' => 'user2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'),
            'address' => null,
            'nohp' => null,
            'avatar' => 'media/profileUser/avatar-user.jpg',
        ]);
    }
}
