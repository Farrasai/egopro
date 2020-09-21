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
            'noIdentitas' => '1234567891234567',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'),
            'address' => 'Jl Soekarno Hatta',
            'nohp' => '08123456789765',
            'avatar' => 'frontend-theme/images/avatar-user.jpg',
        ]);

        DB::table('users')->insert([
            'name' => 'User2',
            'email' => 'user2@gmail.com',
            'noIdentitas' => '8972341234442135',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'),
            'address' => 'Jl Jendral Sudirman',
            'nohp' => '0852123456789876',
            'avatar' => 'frontend-theme/images/avatar-user.jpg',
        ]);
    }
}
