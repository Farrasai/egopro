<?php

use Illuminate\Database\Seeder;

class AdminsOwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Admin',
            'username' => 'egoproAdmin',
            'password' => bcrypt('123123123'),
        ]);

        DB::table('admins')->insert([
            'name' => 'Owner',
            'username' => 'egoproOwner',
            'password' => bcrypt('123123123'),
        ]);
    }
}
