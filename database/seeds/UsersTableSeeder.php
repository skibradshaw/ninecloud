<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create(['first_name' => 'Tim', 'last_name' => 'Bradshaw','email' => 'tim@alltrips.com','password' => bcrypt('jackass')]);
    }
}
