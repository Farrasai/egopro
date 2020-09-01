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
            'password' => bcrypt('123123123'),
            'address' => null,
            'nohp' => null,
            'avatar' => null,
        ]);
    }
}
